<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer ketos-search__k__1MCYzfcZN-outer ketos-local-1057-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner ketos-search__k__1MCYzfcZN-inner ketos-local-1057-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container ketos-search__k__baLWB4dRKjp-container ketos-local-1058-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner ketos-search__k__baLWB4dRKjp-inner ketos-local-1058-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container ketos-search__k__kxeqsSpdy-n-container ketos-local-1059-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner ketos-search__k__kxeqsSpdy-n-inner ketos-local-1059-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-3 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align ketos-search__k__kxeqsSpdy-n-align ketos-local-1059-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container ketos-search__k__CtKC_EuIZL-container ketos-local-1060-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container ketos-search__k__vrf0UGkWrN-container ketos-local-1061-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner ketos-search__k__vrf0UGkWrN-inner ketos-local-1061-inner h-row">
										<?php ketos_theme()->get('archive-loop')->render(array (
  'view' => 'content/search/loop-item',
)); ?>
									</div>
								</div>
								<?php if(ketos_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container ketos-search__k__vD7AVCTELY-container ketos-local-1072-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner ketos-search__k__vD7AVCTELY-inner ketos-local-1072-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container ketos-search__k__tBYU0uM8Xx-container ketos-local-1073-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner ketos-search__k__tBYU0uM8Xx-inner ketos-local-1073-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align ketos-search__k__tBYU0uM8Xx-align ketos-local-1073-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(ketos_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing ketos-search__k__ELgmeRXRD--spacing ketos-local-1074-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer ketos-search__k__ELgmeRXRD--outer ketos-local-1074-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link ketos-search__k__ELgmeRXRD--link ketos-local-1074-link h-w-100 h-global-transition" href="<?php ketos_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text ketos-search__k__ELgmeRXRD--text ketos-local-1074-text kubio-inherit-typography">
																	<?php esc_html_e('Prev.', 'ketos'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container ketos-search__k__P2OarhUKUK-container ketos-local-1075-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner ketos-search__k__P2OarhUKUK-inner ketos-local-1075-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align ketos-search__k__P2OarhUKUK-align ketos-local-1075-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer ketos-search__k__tRiQFlrj8q-outer ketos-local-1076-outer" data-kubio="kubio/pagination-numbers">
														<?php ketos_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container ketos-search__k__2nd5yuWmz9-container ketos-local-1077-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner ketos-search__k__2nd5yuWmz9-inner ketos-local-1077-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align ketos-search__k__2nd5yuWmz9-align ketos-local-1077-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(ketos_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing ketos-search__k__ACSe8L2gsX-spacing ketos-local-1078-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer ketos-search__k__ACSe8L2gsX-outer ketos-local-1078-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link ketos-search__k__ACSe8L2gsX-link ketos-local-1078-link h-w-100 h-global-transition" href="<?php ketos_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text ketos-search__k__ACSe8L2gsX-text ketos-local-1078-text kubio-inherit-typography">
																	<?php esc_html_e('Next', 'ketos'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
