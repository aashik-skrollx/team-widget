<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package 		PyroCMS
 * @subpackage 		Testimonial Widget
 * @author			lckamal
 *
 * Display a slider configured in the Testimonials Module
 *
 * Usage : on a CMS page add {widget_area('name_of_area')}
 * where 'name_of_area' is the name of the widget area you created in the admin control panel
 */

class Widget_Team extends Widgets
{
	public $title		= array(
		'en' => 'Team',
	);
	public $description	= array(
		'en' => 'Display Team selected as featured as widget.',
	);

	public $author		= 'aashik';
	public $website		= 'https://github.com/aashik-skrollx';
	public $version		= '1.0';

	public $fields = array(
		array(
			'field' => 'limit',
			'label' => 'Number of Team Members',
		)
	);

	public function form($options)
	{
        $options['limit'] = ( ! empty($options['limit'])) ? $options['limit'] : 5;
		$options['layout'] = ( ! empty($options['layout'])) ? $options['layout'] : 'section';

		return array(
			'options' => $options
		);
	}

	public function run($options)
	{
		$this->lang->load('team/team');
        class_exists('team_m') or $this->load->model('team/team_m');

		// sets default number of posts to be shown
		$options['limit'] = ( ! empty($options['limit'])) ? $options['limit'] : 5;
        $options['layout'] = ( ! empty($options['layout'])) ? $options['layout'] : 'section';

        //$team = $this->pyrocache->model('team_m','get_featured', array($options['limit']));
		$team = $this->team_m->limit($options['limit'])->get_all();
		
		// returns the variables to be used within the widget's view
		return array('team_widget' => $team, 'team_options' => $options);
	}
}
