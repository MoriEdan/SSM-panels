<?php

namespace InstagramAPI;

class Constants
{
    // Core API Constants.
    const API_URLS = [
        1 => 'https://i.instagram.com/api/v1/',
        2 => 'https://i.instagram.com/api/v2/',
    ];
    const IG_VERSION = '27.0.0.7.97';
    const VERSION_CODE = '84433655';
    const IG_SIG_KEY = '109513c04303341a7daf27bb41b268e633b30dcc65a3fe14503f743176113869';
    const EXPERIMENTS = 'ig_android_pop_probe,ig_camera_android_badge_face_effects_universe,ig_android_universe_video_production,ig_search_client_h1_2017_holdout,ig_android_stories_landscape_mode,ig_android_carousel_non_square_creation,ig_android_lazy_load_swipe_navigation_panels,ig_android_insights_account_insights_v2_universe,ig_android_live_analytics,ig_android_direct_expiring_media_view_mode_stickyness_universe,ig_android_realtime_mqtt_logging,ig_branded_content_show_settings_universe,ig_android_stories_server_coverframe,ig_android_video_captions_universe,ig_business_growth_acquisition_holdout_17h2,ig_android_ontact_invite_universe,ig_android_ad_async_ads_universe,ig_android_shopping_tag_creation_carousel_universe,ig_feed_engagement_holdout_universe,ig_direct_pending_inbox_memcache,ig_promote_guided_budget_duration_options_universe,ig_android_verified_comments_universe,ig_feed_lockdown,android_instagram_prefetch_suggestions_universe,ig_android_carousel_bumping_logging_fix,ig_android_gallery_order_by_date_taken,ig_shopping_viewer_intent_actions,ig_android_startup_prefetch,ig_android_live_640_quality,ig_android_business_post_insights_v3_universe,ig_android_custom_story_import_intent,ig_stories_gif_sticker,ig_lockdown_feed_perf,ig_video_copyright_whitelist,ig_explore_holdout_universe,ig_android_device_language_reset,ig_android_live_fault_tolerance_universe,ig_android_videocall_consumption_universe,ig_android_stories_viewer_use_thumbnail_as_fallback,ig_android_live_viewer_reshare_universe,ig_android_main_feed_seen_state_dont_send_info_on_tail_load,ig_android_face_filter_glyph_nux_animation_universe,ig_android_livewith_guest_adaptive_camera_universe,ig_android_business_new_ads_payment_universe,ig_android_audience_control,ig_android_unified_bindergroup_in_staticandpagedadapter,ig_android_log_account_switch_usable,ig_android_mas_viewer_list_megaphone_universe,ig_android_photo_fbupload_universe,ig_android_carousel_drafts,ig_android_bug_report_version_warning,ig_fbns_push,ig_android_carousel_no_buffer_10_30,ig_android_sso_family_key,ig_android_live_guest_reshare_universe,ig_android_profile_tabs_redesign_universe,ig_android_user_url_deeplink_fbpage_endpoint,ig_android_hide_post_in_feed,ig_android_shopping_thumbnail_icon,ig_search_null_state_universe,ig_android_ad_watchbrowse_universe,ig_android_search_people_tag_universe,ig_android_codec_high_profile,ig_android_ppr_on_destroy_view,ig_android_inline_appeal,ig_android_direct_camera_composer_universe,ig_android_log_mediacodec_info,ig_android_direct_expiring_media_loading_errors,ig_android_camera_face_filter_api_retry,ig_video_use_sve_universe,ig_android_skip_get_fbupload_universe,ig_android_low_data_mode,ig_android_enable_zero_rating,ig_android_force_logout_user_with_mismatched_cookie,ig_android_sample_ppr,ig_android_smartisan_app_badging,ig_android_comment_inline_composer_universe,ig_android_share_story_to_facebook_page,ig_android_direct_expiring_media_fix_duplicate_thread,ig_android_reverse_audio,ig_android_memoize_experiment_check,ig_android_comments_impression_logger,ig_android_live_encore_production_universe,ig_promote_independent_ctas_universe,ig_android_live_dash_latency_viewer,ig_android_http_stack_experiment_2017,ig_android_pending_request_search_bar,ig_promote_split_objectives_universe,ig_android_live_thread_delay_for_mute_universe,ig_android_fb_topsearch_sgp_fork_request,ig_android_heap_uploads,ig_android_stories_archive_universe,ig_android_business_ix_fb_autofill_universe,ig_android_shopping_tag_products_tooltip_not_onboarded,ig_lockdown_feed_shrink_universe,ig_android_stories_create_flow_favorites_tooltip,ig_android_direct_ephemeral_replies_with_context,ig_android_stories_text_format,ig_android_promotion_feedback_channel,ig_android_explore_in_feed_universe,ig_android_memoize_media_on_viewable,ig_android_log_failed_image_download_retries,ig_profile_holdout_2017_universe,ig_android_stories_video_loading_spinner_improvements,ig_android_direct_share_intent,ig_android_live_capture_translucent_navigation_bar,ig_android_stories_drawing_sticker,ig_android_ppr_stories_fix,ig_android_facebook_twitter_profile_photos,ig_android_shopping_tag_creation_universe,ig_android_story_decor_image_fbupload_universe,ig_android_comments_ranking_kill_switch_universe,ig_promote_profile_visit_cta_universe,ig_android_story_reactions,ig_android_ppr_main_feed_enhancements,ig_android_used_jpeg_library,ig_carousel_draft_multiselect,ig_android_live_camera_social_proof_universe,ig_android_stories_close_to_left_head,ig_android_video_playback_retry_time_threshold,ig_android_video_delay_auto_start,ig_android_live_with_invite_sheet_search_universe,ig_android_stories_archive_calendar,ig_android_effect_download_progress_universe,ig_android_ad_watchbrowse_cta_universe,ig_android_ads_manager_pause_resume_ads_universe,ig_android_main_feed_carousel_bumping,ig_stories_in_feed_unit_design_universe,ig_android_explore_iteminfo_universe_exp,ig_android_live_video_reactions_consumption_universe,ig_android_stories_hashtag_text,ig_android_live_save_to_camera_roll_universe,ig_android_sticker_region_tracking,ig_android_activity_feed_row_delete,ig_android_unified_inbox,ig_android_realtime_iris,ig_android_search_client_matching_2,ig_lockdown_notifications_universe,ig_android_task_life_detection,ig_android_feed_seen_state_with_view_info,ig_android_ppr_contextual_enhancements,ig_android_media_rows_prepare_10_31,ig_family_bridges_holdout_universe,ig_android_background_explore_fetch,ig_android_following_follower_social_context,ig_android_live_auto_collapse_comments_view_universe,ig_android_insights_relay_modern_conversion_universe,ig_android_insta_video_consumption_infra,ig_android_ad_watchlead_universe,ig_android_direct_prefetch_direct_story_json,ig_android_live_save_to_camera_roll_compatibility_filter_universe,ig_android_cache_logger_10_34,ig_android_explore_post_chaining_with_netego_universe,ig_android_stories_weblink_creation,ig_android_histogram_reporter,ig_android_network_cancellation,ig_android_shopping_show_shop_tooltip,ig_android_add_to_highlights_universe,ig_android_comment_category_filter_setting_universe,ig_promote_daily_budget_universe,ig_android_live_single_renderer,ig_android_stories_camera_enhancements,ig_android_video_use_new_logging_arch,ig_android_feed_stale_check_interval,ig_android_crop_from_inline_gallery_universe,ig_android_hashtag_following,ig_android_unsampled_appstartup_logging,ig_android_direct_reel_options_entry_point,ig_android_stories_gallery_improvements,ig_android_prefetch_notification_data,ig_android_direct_app_deeplinking,ig_android_direct_full_size_gallery_upload_universe_v2,ig_promotions_unit_in_insights_landing_page,ig_android_mqtt_delay_stop_after_background_universe,ig_android_reactive_feed_like_count,ig_android_comments_cache_perf_study_universe,ig_android_camera_ff_story_open_tray,ig_android_stories_asset_search,ig_android_constrain_image_size_universe,ig_rn_top_posts_stories_nux_universe,ig_ranking_following,ig_android_stories_archive_fast_scroll,ig_android_camera_retain_face_filter,ig_android_direct_inbox_presence,ig_android_live_comment_composer_animation_universe,ig_android_live_skin_smooth,ig_android_stories_posting_offline_ui,ig_android_sidecar_video_upload_universe,ig_android_canvas_swipe_to_open_universe,ig_android_qp_features,android_ig_stories_without_storage_permission_universe2,ig_android_spinner_during_main_feed_loading,ig_android_reel_raven_video_segmented_upload_universe,ig_android_swipe_navigation_x_angle_universe,ig_android_invite_xout_universe,ig_android_offline_mode_holdout,ig_android_live_send_user_location,ig_android_save_all,ig_android_live_report_watch_time_when_update,ig_android_family_bridge_discover,ig_android_startup_manager,instagram_search_and_coefficient_holdout,ig_android_high_res_upload_2,ig_android_dynamic_background_prefetch,ig_android_http_service_same_thread,ig_android_scroll_to_dismiss_keyboard,ig_carousel_animation,ig_android_remove_followers_universe,ig_android_skip_video_render,ig_android_crash_native_core_dumping,ig_android_one_tap_nux_upsell,ig_android_comments_composer_avatar_universe,ig_android_direct_open_thread_with_expiring_media,ig_android_post_capture_filter,ig_android_rendering_controls,ig_android_os_version_blocking,ig_android_ad_threaded_comments_universe,ig_android_no_prefetch_video_bandwidth_threshold,ig_android_encoder_width_safe_multiple_16,ig_android_warm_like_text,ig_android_request_feed_on_back,ig_comments_team_holdout_universe,ig_android_e2e_optimization_universe,ig_shopping_insights,ig_android_cache_clear_universe,ig_android_livewith_inapp_notification_universe,android_ig_camera_face_tracker_version,ig_android_disk_usage_universe,ig_android_direct_async_message_row_building_universe,ig_android_fb_connect_follow_invite_flow,ig_android_direct_24h_replays,ig_android_video_stitch_after_segmenting_universe,ig_android_instavideo_periodic_notif,ig_android_stories_camera_support_image_keyboard,ig_android_enable_swipe_to_dismiss_for_all_dialogs,ig_android_warm_start_fetch_universe,ig_android_marauder_update_frequency,ig_android_rage_shake_whitelist,ig_android_stories_emoji_asset_size,ig_android_ad_connection_manager_universe,ig_android_ad_feed_viewable_listener_lifecycle_backtest_universe,ig_android_reset_to_feed_from_background,ig_android_ad_watchbrowse_carousel_universe,ig_android_branded_content_edit_flow_universe,ig_android_video_feed_universe,ig_android_upload_reliability_universe,ig_android_arengine_bypass_pipeline_during_warmup_universe,ig_promote_guided_education_bar_universe,ig_android_direct_mutation_manager_universe,ig_android_stories_poll_result_share,ig_android_ad_show_new_bakeoff,ig_heart_with_keyboad_exposed_universe,ig_android_react_native_universe_kill_switch,ig_android_comments_composer_callout_universe,ig_android_search_hash_tag_and_username_universe,ig_android_live_disable_speed_test_ui_timeout_universe,ig_android_qp_kill_switch,ig_android_ad_switch_fragment_logging_v2_universe,ig_android_ad_leadgen_single_screen_universe,ig_android_seen_state_contains_check,ig_android_share_to_whatsapp,ig_android_direct_launch_to_stories_gallery,ig_android_live_snapshot_universe,ig_branded_content_share_to_facebook,ig_android_react_native_email_sms_settings_universe,ig_android_share_sheets_thread_count,ig_android_live_join_comment_ui_change,ig_android_business_promote_refresh_fb_access_token_universe,ig_android_camera_tap_smile_icon_to_selfie_universe,ig_android_live_dash_latency_broadcaster,ig_android_prominent_live_button_in_camera_universe,ig_android_video_upload_quality,ig_android_video_cover_frame_from_original_as_fallback,ig_android_camera_leak_detector_universe,ig_android_camera_ui_perf_universe,ig_android_story_viewer_linear_preloading_count,ig_android_shopping_react_native_catalog_selection,ig_android_threaded_comments_universe,ig_android_stories_search_reel_mentions_universe,ig_stories_end_of_tray_suggestions,ig_promote_reach_destinations_universe,ig_android_progressive_jpeg_partial_download,ig_fbns_shared,ig_android_capture_slowmo_mode,ig_android_live_ff_fill_gap,ig_promote_clicks_estimate_universe,ig_android_video_single_surface,ig_android_foreground_location_collection,ig_android_last_edits,ig_android_pending_actions_serialization,ig_android_post_live_viewer_count_privacy_universe,ig_stories_engagement_2017_h2_holdout_universe,ig_android_cache_grid_content_description,ig_android_image_cache_tweak_for_n,ig_android_direct_increased_notification_priority,ig_android_hero_player,ig_android_search_top_search_surface_universe,ig_android_live_dash_latency_manager,instagram_interests_holdout,ig_android_user_detail_endpoint,ig_android_videocall_production_universe,ig_android_ad_watchmore_entry_point_universe,ig_android_unified_video_logger,ig_android_video_detail,ig_android_low_latency_consumption_universe,ig_android_shopping_signup,ig_save_insights,ig_comments_typing_universe,ig_android_live_save_to_camera_roll_limit_by_screen_size_universe,ig_android_exoplayer_settings,ig_android_progressive_jpeg,ig_android_notification_aggregation_fix,ig_android_fblocation_universe,ig_android_direct_view_mode_toggle,ig_android_offline_story_stickers,ig_explore_android_universe,ig_android_video_prefetch_for_connectivity_type,ig_android_ppr_carousel_fix,ig_android_ad_holdout_watchandmore_universe,ig_promote_default_cta,ig_android_insta_video_abr_resize,ig_android_insta_video_sound_always_on,ig_android_in_app_notifications_queue,ig_android_live_request_to_join_consumption_universe,ig_android_ix_payment_universe,ig_android_live_follow_from_comments_universe,ig_android_comments_new_like_button_position_universe,ig_android_hyperzoom,ig_android_sidecar_photo_fbupload_universe,ig_android_live_broadcast_blacklist,ig_android_camera_perceived_perf_universe,ig_android_search_clear_layout_universe,ig_android_webrtc_h264_compatibility_filter_universe,ig_promote_reachbar_universe,ig_android_ad_one_pixel_logging_for_reel_universe,ig_android_submit_button_universe,ig_android_reel_viewer_fetch_missing_reels_universe,ig_android_arengine_separate_prepare,ig_android_direct_video_segmented_upload_universe,ig_android_direct_search_share_sheet_universe,ig_android_business_promote_tooltip,ig_android_direct_blue_tab,ig_android_instavideo_remove_nux_comments,ig_android_image_task_cancel_logic_fix_v25,ig_android_draw_rainbow_client_universe,ig_android_use_simple_video_player,ig_android_rtc_reshare,ig_android_enable_swipe_to_dismiss_for_favorites_dialogs,ig_android_auto_retry_post_mode,ig_fbns_preload_default,ig_android_emoji_sprite_sheet,ig_android_cover_frame_blacklist,ig_android_use_iterative_box_blur,ig_android_gallery_grid_column_count_universe,ig_android_live_encore_consumption_settings_universe,ig_perf_android_holdout,ig_android_list_redesign,ig_android_stories_separate_overlay_creation,ig_android_ad_show_new_interest_survey,ig_android_direct_share_story_to_messenger_nux,ig_android_live_encore_reel_chaining_universe,ig_android_vod_abr_universe,ig_android_audience_profile_icon_badge,ig_android_immersive_viewer,ig_android_hashtag_feed_tabbed,ig_android_search_normalization,ig_android_direct_thread_name_as_notification,ig_android_su_rows_preparer,ig_android_leak_detector_universe,ig_android_video_loopcount_int,ig_android_video_decoder_retry,ig_android_qp_sticky_exposure_universe,ig_android_enable_main_feed_reel_tray_preloading,ig_android_upload_retry_job_service,ig_android_camera_upsell_dialog,ig_android_live_time_adjustment_universe,ig_android_internal_research_settings,ig_android_prod_lockout_universe,ig_android_react_native_ota,ig_android_default_privacy_change,ig_android_main_camera_share_to_direct,ig_lockdown_feed_scroll_universe,ig_android_cold_start_feed_request,ig_android_fb_family_navigation_badging_user,ig_android_video_scrubber_thumbnail_universe,ig_lockdown_feed_caption_length_universe,ig_stories_music_sticker,ig_android_send_impression_via_real_time,ig_android_video_watermark_universe,ig_android_sc_ru_ig,ig_android_animation_perf_reporter_timeout,ig_android_warm_headline_text,ig_android_post_live_expanded_comments_view_universe,ig_android_new_block_flow,ig_android_shopping_profile_shoppable_feed_empty_state,ig_android_long_form_video,ig_android_stories_video_prefetch_kb,ig_android_live_stop_broadcast_on_404,android_face_filter_universe,ig_android_render_iframe_interval,ig_android_live_move_video_with_keyboard_universe,ig_android_webrtc_codec_migration_universe,ig_stories_vertical_list,ig_android_stories_server_brushes,ig_android_live_viewers_canned_comments_universe,ig_android_collections_cache,ig_android_live_face_filter,ig_android_logging_metric_universe_v2,ig_android_screen_recording_bugreport_universe,ig_android_no_cancel_launching_reel_when_scroll_universe,ig_story_camera_reverse_video_experiment,ig_android_story_gallery_folder_selection,ig_downloadable_modules_experiment,ig_direct_core_holdout_q4_2017,ig_android_search,ig_android_reduce_background_overdraw,ig_android_archive_features_holdout_universe,ig_promote_budget_duration_slider_universe,ig_android_insta_video_consumption_titles,ig_android_find_loaded_classes,ig_android_reduce_rect_allocation,ig_android_camera_universe,ig_android_original_video_report_info,ig_android_post_live_badge_universe,ig_stories_holdout_h2_2017,ig_android_video_server_coverframe,ig_promote_relay_modern,ig_android_search_users_universe,ig_android_video_controls_universe,ig_creation_growth_holdout,ig_qp_tooltip,ig_android_live_encore_consumption_universe,ig_android_experimental_filters,ig_android_shopping_tag_should_show_caret_universe,ig_android_shopping_profile_shoppable_feed,ig_timestamp_public_test,ig_android_shopping_tag_hints,ig_android_save_collection_pivots,ig_android_live_comment_fetch_frequency_universe,ig_android_business_conversion_value_prop_v2,ig_promote_guided_ad_preview_newscreen,ig_shopping_viewer_share_action,ig_android_live_wave_production_universe,ig_android_not_showing_hint_text_dimness_universe,ig_android_livewith_universe,ig_android_whatsapp_invite_option,ig_android_video_keep_screen_on,ig_android_video_no_proxy,ig_android_reel_ads_pagination_universe,ig_android_activity_feed_impression_logger,ig_android_ad_story_time_spent_logging_universe,ig_android_live_align_by_2_universe,ig_android_reorder_lowdata_check,ig_android_top_live_profile_pics_universe,ig_android_network_util_cache_info,ig_lazy_module_loading,ig_android_auto_select_face_filter_universe,ig_android_async_network_tweak_universe_15,ig_android_direct_thread_presence,ig_android_direct_init_post_launch,ig_android_camera_new_early_show_smile_icon_universe,ig_android_live_go_live_at_viewer_end_screen_universe,ig_android_live_bg_download_face_filter_assets_universe,ig_android_insta_video_audio_encoder,ig_android_video_segmented_media_needs_reupload_universe,ig_android_upload_prevent_upscale,ig_android_business_ix_universe,ig_android_direct_share_sheet_height,ig_android_instagram_card,ig_android_self_story_layout,ig_android_reduce_textureview_overdraw,ig_feed_ranking,ig_android_stories_gallery_long_term_holdout,ig_android_rtl,ig_android_business_new_navigation_universe,ig_android_comment_inline_expansion_universe,ig_android_live_request_to_join_production_universe,ig_android_share_spinner,ig_android_scroll_away_navigator,ig_android_video_resize_operation,ig_android_stories_eyedropper_color_picker,ig_android_disable_explore_prefetch,ig_android_universe_reel_video_production,ig_android_react_native_push_settings_refactor_universe,ig_android_stories_whatsapp_share,ig_android_power_metrics,ig_android_sfplt,ig_android_story_resharing_universe,ig_android_ad_collection_thumbnail_cta_universe,ig_android_direct_share_story_to_facebook,ig_android_exoplayer_creation_flow,ig_android_non_square_first,ig_android_insta_video_drawing,ig_android_swipeablefilters_universe,ig_android_direct_visual_replies_fifty_fifty,ig_android_reel_viewer_data_buffer_size,ig_android_video_segmented_upload_multi_thread_universe,ig_android_fbupload_sidecar_video_universe,ig_android_react_native_restart_after_error_universe,ig_camera_android_reactions_increase_tap_target,ig_android_direct_notification_actions,ig_android_profile,ig_android_effect_tray_background,ig_android_additional_contact_in_nux,ig_stories_selfie_sticker,ig_android_live_use_rtc_upload_universe,ig_android_story_reactions_producer_holdout,ig_android_stories_reply_composer_redesign,ig_android_story_viewer_segments_bar_universe,ig_explore_netego,ig_android_audience_control_sharecut_universe,ig_android_update_resource_configuration,ig_android_live_nerd_stats_universe,ig_android_video_cache_size_universe,ig_android_direct_fix_top_of_thread_scrolling,ig_android_conversion_back_dialog_universe,ig_video_holdout_h2_2017,ig_android_insights_metrics_graph_universe,ig_android_one_tap_send_sheet_universe,ig_android_international_add_payment_flow_universe,ig_android_live_see_fewer_videos_like_this_universe,ig_android_live_view_profile_from_comments_universe,ig_fbns_blocked,ig_android_direct_inbox_suggestions,ig_android_video_segmented_upload_universe,ig_carousel_post_creation_tag_universe,ig_android_mqtt_region_hint_universe,ig_android_suggest_password_reset_on_oneclick_login,ig_android_live_special_codec_size_list,ig_android_story_viewer_item_duration_universe,ig_android_enable_share_to_messenger,promote_media_picker,ig_android_live_video_reactions_creation_universe,ig_android_sidecar_gallery_universe,ig_android_business_id,ig_android_story_import_intent,ig_android_insta_video_broadcaster_infra_perf,ig_android_live_webrtc_livewith_params,ig_android_comment_audience_control_group_selection_universe,android_ig_fbns_kill_switch,ig_android_su_card_view_preparer_qe,ig_android_unified_camera_universe,ig_android_all_videoplayback_persisting_sound,ig_android_live_pause_upload,ig_android_stories_paging_spring_config_universe,ig_android_live_broadcaster_reshare_universe,ig_android_branded_content_brand_remove_self,ig_android_direct_search_recipients_controller_universe,ig_android_ad_show_full_name_universe,ig_android_anrwatchdog,ig_android_camera_video_universe,ig_android_2fac,ig_android_audio_segment_report_info,ig_android_scroll_main_feed,ig_android_archived_posts_sharing,ig_direct_bypass_group_size_limit_universe,ig_android_background_main_feed_fetch_v27,ig_android_qpl_executor,ig_android_story_captured_media_recovery,ig_android_skywalker_live_event_start_end,ig_android_interests_irrelevant_media_universe,ig_lockdown_feed_perf_image_cover,ig_android_direct_search_story_recipients_universe,ig_android_ad_browser_gesture_control,ig_android_grid_cell_count,ig_android_immersive_viewer_ufi_footer,ig_android_ad_watchinstall_universe,ig_android_comments_notifications_universe,ig_android_shortcuts,ig_android_archive_fetching,ig_android_new_optic,ig_android_audience_control_nux,favorites_home_inline_adding,ig_android_canvas_tilt_to_pan_universe,ig_android_save_locations,ig_internal_ui_for_lazy_loaded_modules_experiment,ig_android_direct_expiring_media_from_notification_behavior_universe,ig_android_single_tap_to_show_mask_tray_universe,ig_android_stories_sampled_progress,ig_android_fbupload_check_status_code_universe,ig_android_ad_account_top_followers_universe,ig_android_ccu_jobscheduler_outer,ig_android_offline_reel_feed,ig_android_direct_presence_setting,ig_android_stories_viewer_modal_activity,ig_android_shopping_creation_flow_onboarding_entry_point,ig_comments_feed_inline_composer_combined_universe,ig_android_activity_feed_row_click,ig_nearby_venues_location_setting,ig_android_user_behavior_prefetch,ig_android_chain_after_own_reel,ig_android_gl_drawing_marks_after_undo_backing,ig_android_story_gallery_behavior,ig_android_mark_seen_state_on_viewed_impression,ig_android_configurable_retry,ig_android_live_monotonic_pts,ig_story_ptr_timeout,ig_android_ad_pbia_header_click_universe,ig_android_comment_tweaks_universe,ig_android_data_usage_new_reporting,ig_android_location_media_count_exp_ig,ig_android_image_cache_log_mismatch_fetch,ig_android_personalized_feed_universe,ig_android_direct_double_tap_to_like_messages,ig_stories_restart_video_universe,ig_android_ccu_jobscheduler_inner,ig_android_insights_holdout,ig_use_fb_rtmp_streamer_universe,ig_android_sfplt_tombstone,ig_android_live_with_guest_viewer_list_universe,ig_android_explore_chaining_universe,ig_android_gqls_typing_indicator,ig_android_comment_audience_control_universe,ig_android_direct_show_inbox_loading_banner_universe,ig_android_near_bottom_fetch,ig_promote_guided_creation_flow,ig_ads_increase_connection_step2_v2,ig_android_draw_chalk_client_universe,ig_android_direct_keep_in_chat_ephemeral,ig_android_separate_network_executor';
    const LOGIN_EXPERIMENTS = 'ig_android_updated_copy_user_lookup_failed,ig_android_hsite_prefill_new_carrier,ig_android_me_profile_prefill_in_reg,ig_android_allow_phone_reg_selectable,ig_android_gmail_oauth_in_reg,ig_android_run_account_nux_on_server_cue_device,ig_android_universal_instagram_deep_links_universe,ig_android_make_sure_next_button_is_visible_in_reg,ig_android_report_nux_completed_device,ig_android_sim_info_upload,ig_android_reg_omnibox,ig_android_background_phone_confirmation_v2,ig_android_background_voice_phone_confirmation,ig_android_password_toggle_on_login_universe_v2,ig_android_skip_signup_from_one_tap_if_no_fb_sso,ig_android_refresh_onetap_nonce,ig_android_multi_tap_login,ig_android_onetaplogin_login_upsell,ig_android_jp_sms_code_extraction_fix, ig_challenge_kill_switch,ig_android_modularized_nux_universe_device,ig_android_run_device_verification,ig_android_remove_sms_password_reset_deep_link,ig_android_phone_id_email_prefill_in_reg,ig_android_typeahead_bug_fixes_universe,ig_restore_focus_on_reg_textbox_universe,ig_android_abandoned_reg_flow,ig_android_phoneid_sync_interval,ig_android_2fac_auto_fill_sms_universe,ig_android_family_apps_user_values_provider_universe,ig_android_security_intent_switchoff,ig_android_enter_to_login,ig_android_show_password_in_reg_universe,ig_android_access_redesign,ig_android_remove_icons_in_reg_v2,ig_android_ui_cleanup_in_reg_v2,ig_android_login_bad_password_autologin_universe,ig_android_editable_username_in_reg';
    const SIG_KEY_VERSION = '4';

    // User-Agent Constants.
    const USER_AGENT_LOCALE = 'en_US'; // "language_COUNTRY".

    // HTTP Protocol Constants.
    const ACCEPT_LANGUAGE = 'en-US'; // "language-COUNTRY".
    const ACCEPT_ENCODING = 'gzip,deflate';
    const CONTENT_TYPE = 'application/x-www-form-urlencoded; charset=UTF-8';
    const X_FB_HTTP_Engine = 'Liger';
    const X_IG_Connection_Type = 'WIFI';
    const X_IG_Capabilities = '3brTBw==';

    // Facebook Constants.
    const FACEBOOK_OTA_FIELDS = 'update%7Bdownload_uri%2Cdownload_uri_delta_base%2Cversion_code_delta_base%2Cdownload_uri_delta%2Cfallback_to_full_update%2Cfile_size_delta%2Cversion_code%2Cpublished_date%2Cfile_size%2Cota_bundle_type%2Cresources_checksum%7D';
    const FACEBOOK_ORCA_PROTOCOL_VERSION = 20150314;
    const FACEBOOK_ORCA_APPLICATION_ID = '124024574287414';
    const FACEBOOK_ANALYTICS_APPLICATION_ID = '567067343352427';

    // MQTT Constants.
    const PLATFORM = 'android';
    const FBNS_APPLICATION_NAME = 'MQTT';
    const INSTAGRAM_APPLICATION_NAME = 'InstagramForAndroid';
    const PACKAGE_NAME = 'com.instagram.android';

    // Instagram Analytics.
    const SURFACE_PARAM = 4715;

    // Internal Feedtype Constants. CRITICAL: EVERY value here MUST be unique!
    const FEED_TIMELINE = 1;
    const FEED_TIMELINE_ALBUM = 2;
    const FEED_STORY = 3;
    const FEED_DIRECT = 4;
    const FEED_DIRECT_STORY = 5;

    // General Constants.
    const SRC_DIR = __DIR__; // Absolute path to the "src" folder.
}