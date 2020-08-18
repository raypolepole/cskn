<!-- trash modal -->
<div class="maxmodal-data" id="trash-modal">
  <span class='title'><?php _e("Trash button","maxbuttons"); ?></span>
  <span class="content"><p><?php _e("The button will be moved to trash. It can be recovered from the trash bin later. Continue?", "maxbuttons"); ?></p></span>
    <div class='controls'>
      <button type="button" class='button-primary' data-buttonaction='trash' data-buttonid='<?php echo $this->view->button_id ?>'>
      <?php _e('Yes','maxbuttons'); ?></button>

      <a class="modal_close button-primary"><?php _e("No", "maxbuttons"); ?></a>

    </div>
</div>
