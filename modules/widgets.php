<?php 

class convertor_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'convertor_widget', // Base ID
			'Convertor', // Name
			array( 'description' => __( 'Convertor Widget', 'text_domain' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		extract( $args );
		//$title = apply_filters( 'widget_title', $instance['title'] );
		//$number = apply_filters( 'widget_title', $instance['number'] );
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];

		echo do_shortcode('[converter]');
		   echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
 	$instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance; 
	}

	public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'text_domain' );
        }
        ?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		
		<?php 
	}

} // class Foo_Widget
// register Foo_Widget widget
add_action( 'widgets_init', create_function( '', 'register_widget( "convertor_widget" );' ) );

?>