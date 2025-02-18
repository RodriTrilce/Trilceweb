<?php
remove_action( 'learn-press/profile/dashboard-summary', 'learn_press_profile_dashboard_user_bio', 10 );
add_action( 'learn-press/profile/dashboard-summary', 'profile_dashboard_user_courses_count', 10 );
add_action( 'learn-press/profile/dashboard-summary', 'profile_dashboard_user_courses_progress', 20 );


function profile_dashboard_user_courses_count() {
	/**
	 * @var LP_Profile          $profile
	 * @var LP_User_Item_Course $user_course
	 * @var LP_User_Item_Quiz   $user_quiz
	 */
	$profile = learn_press_get_profile();

	$completed_courses   = 0;
	$in_progress_courses = 0;
	$completed_quizzes   = 0;
	$in_progress_quizzes = 0;

	$courses_query = $profile->query_courses( 'purchased' );

	if ( ! empty( $courses_query['items'] ) ) {
		foreach ( $courses_query['items'] as $user_course ) {
			$course_status = $user_course->get_results( 'status' );

			switch ( $course_status ) {
				case 'in-progress':
					$in_progress_courses++;
					break;
				case 'passed':
					$completed_courses++;
					break;
			}
		}
	}

	$quizzes_query = $profile->query_quizzes();

	if ( ! empty( $quizzes_query['items'] ) ) {
		foreach ( $quizzes_query['items'] as $user_quiz ) {
			$quiz_status = $user_quiz->get_results( 'status' );

			switch ( $quiz_status ) {
				case 'started':
					$in_progress_quizzes++;
					break;
				case 'completed':
					$completed_quizzes++;
					break;
			}
		}
	}

			$completed_courses_number   = str_pad( $completed_courses, 2, '0', STR_PAD_LEFT );
			$in_progress_courses_number = str_pad( $in_progress_courses, 2, '0', STR_PAD_LEFT );
			$completed_quizzes_number   = str_pad( $completed_quizzes, 2, '0', STR_PAD_LEFT );
			$in_progress_quizzes_number = str_pad( $in_progress_quizzes, 2, '0', STR_PAD_LEFT );
	?>

			<div class="profile-progress-status">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="status-box success courses-completed">
							<div class="status-number"><?php echo esc_html( $completed_courses_number ); ?></div>
							<h4 class="status-text"><?php esc_html_e( 'Courses Completed', 'edusphere' ); ?></h4>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="status-box warning courses-in-progress">
							<div class="status-number"><?php echo esc_html( $in_progress_courses_number ); ?></div>
							<h4 class="status-text"><?php esc_html_e( 'Courses In Progress', 'edusphere' ); ?></h4>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="status-box info quizzes-completed">
							<div class="status-number"><?php echo esc_html( $completed_quizzes_number ); ?></div>
							<h4 class="status-text"><?php esc_html_e( 'Quizzes Completed', 'edusphere' ); ?></h4>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="status-box error courses-completed">
							<div class="status-number"><?php echo esc_html( $in_progress_quizzes_number ); ?></div>
							<h4 class="status-text"><?php esc_html_e( 'Quizzes  In Progress', 'edusphere' ); ?></h4>
						</div>
					</div>
				</div>
			</div>
			<?php
}

function profile_dashboard_user_courses_progress() {
	/**
	 * @var LP_Profile          $profile
	 * @var LP_User_Item_Course $user_course
	 */
	$profile = learn_press_get_profile();

	$courses_query = $profile->query_courses( 'purchased' );

	if ( $courses_query['items'] ) {
		?>
		<div class="profile-courses-progress">
			<h3 class="profile-courses-heading"><?php esc_html_e( 'Courses progress', 'edusphere' ); ?></h3>
			<div class="rt-course-progress">
				<?php
				foreach ( $courses_query['items'] as $user_course ) {
					// Setup.
					$course         = learn_press_get_course( $user_course->get_id() );
					$percent_result = $user_course->get_percent_result();
					?>
					<div class="single-progress-bar">
						<h6 class="progress-title"><?php echo esc_html( $course->get_title() ); ?></h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php echo esc_attr( $percent_result ); ?>"><?php echo esc_html( $percent_result ); ?></div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php
	}
}

function radiantthemes_get_author_meta_career( $user_id = false ) {
	$career = get_the_author_meta( 'career', $user_id );

	if ( empty( $career ) ) {
		return;
	}
	?>
	<div class="author-career">
		<?php echo esc_html( $career ); ?>
	</div>
	<?php
}

function radiantthemes_get_author_meta_phone_number( $user_id = false ) {
	$phone_number = get_the_author_meta( 'phone_number', $user_id );

	if ( empty( $phone_number ) ) {
		return;
	}
	?>
	<div class="meta-item profile-author-phone">
		<span><?php esc_html_e( 'Phone number: ', 'edusphere' ); ?></span>
		<div class="author-phone-number">
			<?php echo esc_html( $phone_number ); ?>
		</div>
	</div>
	<?php
}

function radiantthemes_get_author_meta_email( $user_id = false ) {
	$email = get_the_author_meta( 'user_email', $user_id );

	if ( empty( $email ) ) {
		return;
	}
	?>
	<div class="meta-item profile-author-email">
		<span><?php esc_html_e( 'Email: ', 'edusphere' ); ?></span>
		<div class="author-email">
			<?php echo esc_html( $email ); ?>
		</div>
	</div>
	<?php
}

function radiantthemes_get_author_socials( $user_id = false ) {
	$facebook  = get_the_author_meta( 'facebook', $user_id );
	$twitter   = get_the_author_meta( 'twitter', $user_id );
	$instagram = get_the_author_meta( 'instagram', $user_id );
	$linkedin  = get_the_author_meta( 'linkedin', $user_id );
	$pinterest = get_the_author_meta( 'pinterest', $user_id );
	$youtube   = get_the_author_meta( 'youtube', $user_id );
	?>
	<?php if ( $facebook || $twitter || $instagram || $linkedin || $youtube ) : ?>
		<div class="author-social-networks">
			<div class="inner">
				<?php if ( $twitter ) : ?>
					<a aria-label="<?php esc_attr_e( 'Twitter', 'edusphere' ); ?>" href="<?php echo esc_url( $twitter ); ?>" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
				<?php endif; ?>

				<?php if ( $facebook ) : ?>
					<a aria-label="<?php esc_attr_e( 'Facebook', 'edusphere' ); ?>" href="<?php echo esc_url( $facebook ); ?>" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
				<?php endif; ?>

				<?php if ( $instagram ) : ?>
					<a aria-label="<?php esc_attr_e( 'Instagram', 'edusphere' ); ?>" href="<?php echo esc_url( $instagram ); ?>" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
				<?php endif; ?>

				<?php if ( $linkedin ) : ?>
					<a aria-label="<?php esc_attr_e( 'Linkedin', 'edusphere' ); ?>" href="<?php echo esc_url( $linkedin ); ?>" target="_blank">
						<i class="fab fa-linkedin"></i>
					</a>
				<?php endif; ?>

				<?php if ( $pinterest ) : ?>
					<a aria-label="<?php esc_attr_e( 'Pinterest', 'edusphere' ); ?>" href="<?php echo esc_url( $pinterest ); ?>" target="_blank">
						<i class="fab fa-pinterest"></i>
					</a>
				<?php endif; ?>

				<?php if ( $youtube ) : ?>
					<a aria-label="<?php esc_attr_e( 'Youtube', 'edusphere' ); ?>" href="<?php echo esc_url( $youtube ); ?>" target="_blank">
						<i class="fab fa-youtube"></i>
					</a>
				<?php endif; ?>
			</div>
		</div>
		<?php
	endif;
}
