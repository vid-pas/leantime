<?php

$newField = $this->get('newField');
if ($login::userIsAtLeast($roles::$editor) && !empty($newField)) { ?>
    <div class="btn-group">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?=$this->__("links.new_with_icon") ?> <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <?php foreach ($newField as $option) { ?>
                <li>
                    <a
                        href="<?= !empty($option['url']) ? $option['url'] : '' ?>"
                        class="<?= !empty($option['class']) ? $option['class'] : '' ?>"
                    > <?= !empty($option['text']) ? $this->__($option['text']) : '' ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>

    <?php
}
