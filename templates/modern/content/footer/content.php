 <script type="text/javascript">
    $(function(){

    var columnWidthValue = 185;
    let isMobile = window.matchMedia("only screen and (max-width: 600px)").matches;

    if (isMobile) {
        columnWidthValue = 130;
    }

    var $container = $('#content');
        $container.masonry({
            itemSelector: '.post',
            columnWidth: columnWidthValue,
            isFitWidth: true,
            animate: true
    });  
   window.addEventListener('resize', function(event){
        var columnWidthValue = 185;
        let isMobile = window.matchMedia("only screen and (max-width: 600px)").matches;

        if (isMobile) {
            columnWidthValue = 130;
        }
        var $container = $('#content');
            $container.masonry({
                itemSelector: '.post',
                columnWidth: columnWidthValue,
                isFitWidth: true,
                animate: true
        });  
    });

    if(PageType == "games" || PageType == "best") {
        $(window).scroll(function(){
            if($(document).scrollTop() + $(window).height() > $(document).height() - 500) {
                if (!loading) {
                    loading= true;
                    jsonajax(30);
                }
            }
        });
    }
    var LoadedGamesNum = 0;
    var loading= false;
    function jsonajax(e){
    if(e<=0) return;
    if (typeof cat !== 'undefined') {
        url = "{{LOAD_MORE_URL}}/ajax_loadmoregames.php?LoadedGamesNum=" + LoadedGamesNum + "&num=" + e + "&ids=" + ids + "&cat=" + cat;
    }
    else {
        url = "{{LOAD_MORE_URL}}/ajax_loadmoregames.php?LoadedGamesNum=" + LoadedGamesNum + "&num=" + e + "&ids=" + ids + "&pagetype=" + PageType;
    }
    $.ajax({
        url: url,
        success: function(t) {
                if(t == 'NoData')  {
                    loading = true;
                }else{
                    var $html = $(t);
                    $container.append($html).masonry('appended', $html);
                    loading = false;
                }
              LoadedGamesNum = LoadedGamesNum + e;
        }
    });
    }
    });
    if (typeof PageType !== 'undefined') {
        if(PageType == "played") {
            $(".bottomtext").hide();
        }
    }
</script>
{{CMS}}
{{COOKIE}}

<div id="footer" class=fix>
    <div class="foot-inner">
        <div class="link-b fn-left">
            <a href="mailto:studiotigital@gmail.com">Contact</a> |
            <a href="{{CONFIG_SITE_URL}}/about">About Us</a> |
            <a href="http://thiago3dgames.site" target="_blank">Free Games For Your Site</a>
        </div>
        <div class="link-b fn-right">
            <a href="http://thiago3dgames.site" target="_blank">Partners</a> |
            <a href="{{CONFIG_SITE_URL}}/terms">Terms</a> |
            <a href="{{CONFIG_SITE_URL}}/privacy">Privacy</a> |
            <span>Thiago3DGames.site &copy; {{CONFIG_THIS_YEAR}}</span>
        </div>
        <div class="link-b2">
            <a href="{{CONFIG_SITE_URL}}/random">Random Game</a> |
            <a href="http://thiago3dgames.site" target="_blank">Mobile Games</a>
        </div>
        </div>
    </div>
</div>
<div id="BackTop"></div>