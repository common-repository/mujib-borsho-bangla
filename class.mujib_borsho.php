<?php
/* Mujib Borsho Widget */
class MujibBorshoBNWidget extends WP_Widget {
public function __construct() {
	parent::__construct(
		'mbb',
		__( 'Mujib Borsho Bangla', 'mbb' ),
		array( 'description' => __( 'Add this widget to sidebar.', 'mbb' ) )
	);
}

public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? $instance['title'] : __( 'Mujib Borsho', 'mbb' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title', 'mbb' ) ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ) ?>" value="<?php echo esc_attr( $title ); ?>">
		</p>
	 
	<?php
}

public function widget( $args, $instance ) {
	echo $args['before_widget'];
	if ( isset( $instance['title'] ) && $instance['title'] != '' ) {
		// echo $args['before_title'];
		// echo apply_filters( 'widget_title', $instance['title'] );
		echo $args['after_title'];
?>

<style type="text/css">.mujib-borsho-bn-counter {width: 100%;height: auto;border: 1px solid #FCDDDD;background : #FCF3F3;color: #0e7a14;}.mujib-borsho-bn-image img {width: 100%;padding: 15px;margin: 10px auto;}.mujib-borsho-bn-clock {margin-bottom: 40px;margin-top: -30px;}.mujib-borsho-bn-timer {background: #0e7a14;padding: 4px;font-size: 28px;color: #fff;display: inline-block;margin-right: 5px;margin-left: 5px;width: 20%;}.mujib-borsho-bn-clock__slot {position: absolute;margin-top: 52px;margin-left: -66px;margin-right: 5px;font-weight: bold;font-size: 19px;color: #212121;width: 20%;}</style>

<div class="mujib-borsho-bn-counter">
	<div class="special-counter-box" id="special-counter-box" align="center">
		<div class="mujib-borsho-bn-image"> 
			<img src="<?php echo plugins_url( 'mujib-borsho.png', __FILE__ ); ?>" alt="Mujib Borsho">
		</div>
			
		<div id="countdown_block" style="max-width: 100%">
			<div class="mujib-borsho-bn-clock"></div>
		</div>
	</div>
</div>

<script type="text/javascript">var cur_lang = 'bangla';</script>
<script type="text/javascript">console.clear();function CountdownTrackerBN(label,value){var el=document.createElement('span');el.className='mujib-borsho-bn-clock__piece';el.innerHTML='<b class="mujib-borsho-bn-clock__card"><b class="mujib-borsho-bn-timer"></b><b class="mujib_borsho_bn_bottom"></b><b class="mujib_borsho_bn_back"><b class="mujib_borsho_bn_bottom"></b></b></b>'+'<span class="mujib-borsho-bn-clock__slot">'+label+'</span>';this.el=el;var top=el.querySelector('.mujib-borsho-bn-timer'),bottom=el.querySelector('.mujib_borsho_bn_bottom'),back=el.querySelector('.mujib_borsho_bn_back'),backBottom=el.querySelector('.mujib_borsho_bn_back .mujib_borsho_bn_bottom');this.update=function(val){val=('০'+val).slice(-2);if(val!==this.currentValue){if(this.currentValue>=0){back.setAttribute('data-value',this.currentValue);bottom.setAttribute('data-value',this.currentValue);}
this.currentValue=val;top.innerText=this.currentValue;backBottom.setAttribute('data-value',this.currentValue);this.el.classList.remove('flip');void this.el.offsetWidth;this.el.classList.add('flip');}}
this.update(value);}
function getTimeRemainingBN(endtime){var t=Date.parse(endtime)-Date.parse(new Date());if(cur_lang=='bangla'){return{'Total':t,'দিন':Math.floor(t /(1000*60*60*24)),'ঘণ্টা':Math.floor((t /(1000*60*60))%24),'মিনিট':Math.floor((t / 1000 / 60)%60),'সেকেন্ড':Math.floor((t / 1000)%60)};}else if(cur_lang=='english'){return{'Total':t,'Days':Math.floor(t /(1000*60*60*24)),'Hours':Math.floor((t /(1000*60*60))%24),'Minutes':Math.floor((t / 1000 / 60)%60),'Seconds':Math.floor((t / 1000)%60)};}}
function defineBangla(val){var EnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};String.prototype.getDigitBanglaFromEnglish=function(){var retStr=this;for(var x in EnlishToBanglaNumber){retStr=retStr.replace(new RegExp(x,'g'),EnlishToBanglaNumber[x]);}
return retStr;};var english_number=''+val;var bangla_converted_number=english_number.getDigitBanglaFromEnglish();return bangla_converted_number;}
function getTime(){var t=new Date();return{'Total':t,'Hours':t.getHours()%12,'Minutes':t.getMinutes(),'Seconds':t.getSeconds()};}
function Clock(countdown,callback){countdown=countdown?new Date(Date.parse(countdown)):false;callback=callback||function(){};var updateFn=countdown?getTimeRemainingBN:getTime;this.el=document.createElement('div');this.el.className='mujib-borsho-bn-clock';var trackers={},t=updateFn(countdown),key,timeinterval;for(key in t){if(key==='Total'){continue;}
trackers[key]=new CountdownTrackerBN(key,defineBangla(t[key]));this.el.appendChild(trackers[key].el);}
var i=0;function updateClock(){timeinterval=requestAnimationFrame(updateClock);if(i++%10){return;}
var t=updateFn(countdown);if(t.Total<0){cancelAnimationFrame(timeinterval);for(key in trackers){trackers[key].update(0);}
callback();return;}
for(key in trackers){trackers[key].update(defineBangla(t[key]));}}
setTimeout(updateClock,500);}
var deadline=new Date("Mar 17, 2020 00:01:01");var c=new Clock(deadline,function(){alert('Celebrating 100 Years of Sheikh Mujibur Rahman!')});document.getElementById('countdown_block').appendChild(c.el);</script>	
<?php
	}
		echo $args['after_widget'];
	}
}
?>