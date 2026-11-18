import os
import sys

def remove_bom_from_file(filepath):
    """Detect and remove UTF-8 BOM from a file."""
    try:
        with open(filepath, 'rb') as f:
            content = f.read()
        
        # Check if file starts with UTF-8 BOM (\xef\xbb\xbf)
        bom = b'\xef\xbb\xbf'
        count = 0
        while content.startswith(bom):
            content = content[3:]
            count += 1
            
        if count > 0:
            with open(filepath, 'wb') as f:
                f.write(content)
            print(f"[FIXED] Removed {count} BOM(s) from: {filepath}")
            return True
        return False
    except Exception as e:
        print(f"[ERROR] Could not process {filepath}: {e}")
        return False

def scan_and_clean_directory(directory):
    """Scan all php, html, inc, js, css files in directory and clean BOM."""
    extensions = ('.php', '.html', '.htm', '.inc', '.js', '.css')
    fixed_files = 0
    total_scanned = 0
    
    print(f"Scanning '{directory}' for files with UTF-8 BOM...")
    for root, _, files in os.walk(directory):
        for file in files:
            if file.lower().endswith(extensions):
                total_scanned += 1
                filepath = os.path.join(root, file)
                if remove_bom_from_file(filepath):
                    fixed_files += 1
                    
    print("\n--- Summary ---")
    print(f"Total files scanned: {total_scanned}")
    print(f"Total files fixed:   {fixed_files}")

if __name__ == '__main__':
    target_dir = sys.argv[1] if len(sys.argv) > 1 else '.'
    scan_and_clean_directory(target_dir)
