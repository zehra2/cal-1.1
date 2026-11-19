export const adsensePublisher = 'ca-pub-2047576600281805';
export const adsEnabled = true;

export const adSlots: Record<string, string> = {
  hero_leaderboard: '6715403966',
  mid_content_1: '3163885774',
  mid_content_2: '7206358557',
  after_faq: '5893276886',
  mobile_anchor: '6664147080',
};

export function buildAdUnit(
  slotKey: string,
  format = 'auto',
  sizeStyle = 'banner'
): string {
  if (!adsEnabled) {
    return '<!-- Ads disabled -->';
  }
  const slotId = adSlots[slotKey] ?? '';
  if (!slotId || slotId.includes('SLOT_ID')) {
    return `<!-- AD SETUP NEEDED: ${slotKey} -->`;
  }
  const styles: Record<string, string> = {
    banner: 'display:block;text-align:center;margin:1.5rem 0;min-height:90px;',
    rect: 'display:block;text-align:center;margin:1.5rem 0;min-height:250px;',
    square: 'display:block;text-align:center;margin:1.5rem 0;min-height:280px;',
    mobile: 'display:inline-block;width:320px;height:50px;',
  };
  const style = styles[sizeStyle] ?? styles.banner;
  return `
    <div class="ad-container" style="${style}">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="${adsensePublisher}"
             data-ad-slot="${slotId}"
             data-ad-format="${format}"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>`;
}

export function adAboveHero(): string {
  return buildAdUnit('hero_leaderboard', 'auto', 'banner');
}

export function adMidContent1(): string {
  return buildAdUnit('mid_content_1', 'auto', 'rect');
}

export function adMidContent2(): string {
  return buildAdUnit('mid_content_2', 'auto', 'rect');
}

export function adAfterFAQ(): string {
  return buildAdUnit('after_faq', 'auto', 'rect');
}

export function adMobileAnchor(): string {
  if (!adsEnabled) return '<!-- Ads disabled -->';
  const slotId = adSlots.mobile_anchor ?? '';
  if (!slotId || slotId.includes('SLOT_ID')) return '';
  return `
    <div id="mobile-anchor-ad" style="position:fixed;bottom:0;left:0;right:0;text-align:center;background:#fff;border-top:1px solid #e2e8f0;padding:4px;z-index:9999;display:none;">
        <ins class="adsbygoogle"
             style="display:inline-block;width:320px;height:50px"
             data-ad-client="${adsensePublisher}"
             data-ad-slot="${slotId}"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
    <script>
    (function() {
        if (window.innerWidth < 640) {
            var el = document.getElementById("mobile-anchor-ad");
            if (el) el.style.display = "block";
            document.body.style.paddingBottom = "60px";
        }
    })();
    </script>`;
}

export function adForCurrentPage(uri = ''): string {
  if (uri.includes('/real-estate/')) return adMidContent1();
  if (uri.includes('/finance/')) return adMidContent1();
  if (uri.includes('/health/')) return adMidContent2();
  return adMidContent1();
}

export function trackAdImpression(_slotName: string): string {
  return '';
}
