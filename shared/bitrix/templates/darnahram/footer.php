<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
</div>
</div>
<div class="hFooter visible-xs visible-sm"></div>
</div>
<footer class="visible-xs visible-sm">
    <div class="footer container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
                <ul class="list-inline social">
                    <li><a href="https://www.facebook.com/darnahram/" target="_blank"><i
                                class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="https://twitter.com/darnahram" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCx8M8UNI6MBUZsAYCTCXzww" target="_blank"><i
                                class="fa fa-youtube fa-lg"></i></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <div class="phone-mail">
                    <? $phone = '+7 495 994-56-29'; ?>
                    <a href="tel:+<?= preg_replace("#[^\d]#", "", $phone) ?>"><?= $phone ?></a><br>
                    <a href="mailto:info@darnahram.ru">info@darnahram.ru</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <div class="baza23">
                    <a href='http://www.baza23.ru' target='_blank'><?= GetMessage("FOOTER_CREATOR_TEXT") ?>
                        &nbsp;<?= GetMessage("FOOTER_CREATOR_HREF") ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>