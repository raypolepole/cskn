<?php
namespace MaxButtons;

// controller for our views
abstract class MaxController
{

  protected $view; // view data
  protected $page;
  protected $messages = array(); // messages to display to user.
  protected $view_template;

  protected $actions = false;

  protected $modals_loaded = array();

  public function __construct()
  {
      $this->view = new \stdClass;
  }

  public function view()
  {
    $view = $this->view;


    if (! is_null($this->view_template))
    {
      $path = MB()->get_plugin_path() . 'includes/' . $this->view_template . '.php';
      if (file_exists($path))
        include_once($path);
      else {
        exit('Template Not Found');
      }
    }
  }

  abstract protected function handlePost();

  public function getButtonLink($button_id = 0, $args = array())
  {
     $link = admin_url() . 'admin.php?page=maxbuttons-controller&action=edit';
     if ($button_id > 0)
     {
       $link = add_query_arg('id', $button_id, $link);
     }
     $link = add_query_arg($args,$link);
     return $link;
  }

  public function getListLink($view = 'all', $args = array() )
  {
     $link = admin_url() . 'admin.php?page=maxbuttons-controller&view=' . $view;
     $link = add_query_arg($args,$link);
     return $link;

  }

  // sets name of the requested page. can be used to load a specific template.
  public function setPage($page)
  {
    $this->page = $page;
  }

  protected function loadFormActions()
  {
    $actions = array();

    $actions['add-new'] = array('href' => $this->getButtonLink(), 'text' => __('Add New', 'maxbuttons'), 'class' => '');
    $actions['save'] = array('href' => 'javascript:void(0)', 'text' =>  __('Save', 'maxbuttons'), 'class' => 'button button-save disabled');
    $actions['copy'] = array('href' => 'javascript:void(0)', 'text' => __('Copy', 'maxbuttons'), 'class' => 'maxmodal button', 'id' => 'button-copy',
        'modal' => 'copy-modal');
    $actions['trash'] = array('href' => 'javascript:void(0)', 'text' => __('Move to Trash', 'maxbuttons'), 'class' => 'maxmodal button', 'id' => 'button-trash', 'modal' => 'trash-modal');
    $actions['delete'] = array('href' => 'javascript:void(0)', 'text' => __("Delete","maxbuttons"), 'class' => 'maxmodal button', 'id' => 'button-delete', 'modal' => 'delete-modal');

    return apply_filters('maxbuttons/editor/actions',$actions);
  }

  protected function getButton($name, $args = array() )
  {
      if (! $this->actions)
        $this->actions = $this->loadFormActions();


      if (isset($this->actions[$name]) && $this->actions[$name] !== false)
      {
        $action = $this->actions[$name];

        $args = wp_parse_args($args, $action);

        $class = $args['class'];
        if (isset($args['add_class']))
           $class .= ' ' . $args['add_class'];

        $output = '<a href="' . $args['href'] . '" class="' . $class . '"';

        if (isset($args['id']))
          $output .= ' id="' . $action['id'] . '"';
        if (isset($args['modal']))
        {
          $output .= ' data-modal="' . $args['modal'] . '"';
          $this->loadModal($args['modal']);
        }
        $output .= '>' . $args['text'] . '</a>';

        return $output;
      }
      else
        return '';
  }

  protected function loadModal($name)
  {
    if (isset($this->modals_loaded[$name]))
      return;

    MB()->load_modal_script();
    $path = MB()->get_plugin_path();

    include($path . 'views/modals/' . $name . '.php');

    $this->modals_loaded[] = $name;
  }


}
