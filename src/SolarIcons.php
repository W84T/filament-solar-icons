<?php

namespace W84T\Icons\SolarIcons;

use Filafly\Icons\IconSet;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Schemas\View\SchemaIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;
use W84T\Icons\SolarIcons\Enums\Solar;
use W84T\Icons\SolarIcons\Enums\SolarStyle;

class SolarIcons extends IconSet
{
    protected string $pluginId = 'w84t-filament-solar-icons';

    protected mixed $iconEnum = Solar::class;

    protected string $iconPrefix = 'solar'; // e.g., 'phosphor', 'carbon'


    protected mixed $styleEnum = SolarStyle::class;

    protected array $iconMap = [
        // Panels icon aliases
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => Solar::MinimalisticMagniferOutline,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => Solar::FilterOutline,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => Solar::Home2Outline,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => Solar::LoginOutline,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => Solar::LoginOutline,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => Solar::PenOutline,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => Solar::SettingsMinimalisticOutline,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => Solar::EyeOutline,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => Solar::AltArrowLeftOutline,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => Solar::AltArrowRightOutline,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Solar::AltArrowRightOutline,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => Solar::AltArrowLeftOutline,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => Solar::AltArrowDownOutline,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => Solar::CardOutline,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => Solar::UserOutline,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => Solar::UserPlusOutline,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => Solar::HamburgerMenuOutline,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => Solar::SunOutline,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => Solar::MoonOutline,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => Solar::MonitorOutline,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => Solar::AltArrowLeftOutline,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => Solar::AltArrowRightOutline,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => Solar::HamburgerMenuOutline,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => Solar::BellOutline,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => Solar::UserOutline,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => Solar::LogoutOutline,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => Solar::LogoutOutline,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => Solar::NotebookMinimalisticOutline,
//        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => Solar::Replace,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => Solar::CopyOutline,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => Solar::AltArrowDownOutline,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => Solar::TrashBinMinimalisticOutline,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => Solar::MaximizeOutline,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => Solar::AltArrowDownOutline,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => Solar::AltArrowUpOutline,
//        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => Solar::Replace,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => Solar::MinimalisticMagniferOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => Solar::CropMinimalisticOutline,
//        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => Solar::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => Solar::FlipHorizontalOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => Solar::FlipVerticalOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => Solar::AltArrowDownOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => Solar::AltArrowLeftOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => Solar::AltArrowRightOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => Solar::AltArrowUpOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => Solar::UndoLeftOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => Solar::UndoRightOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => Solar::MinimalisticMagniferZoomInOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => Solar::MinimalisticMagniferZoomInOutline,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => Solar::MinimalisticMagniferZoomOutOutline,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => Solar::TrashBinMinimalisticOutline,
//        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => Solar::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => Solar::CopyOutline,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => Solar::AltArrowDownOutline,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => Solar::TrashBinMinimalisticOutline,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => Solar::MaximizeOutline,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => Solar::AltArrowDownOutline,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => Solar::AltArrowUpOutline,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => Solar::ReorderOutline,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => Solar::AddCircleOutline,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => Solar::PenOutline,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => Solar::EyeClosedOutline,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => Solar::EyeOutline,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => Solar::CloseCircleOutline,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => Solar::CheckCircleOutline,

        // Tables icon aliases
//        TablesIconAlias::ACTIONS_COLUMN_MANAGER => Solar::Replace,
        TablesIconAlias::ACTIONS_DISABLE_REORDERING => Solar::ReorderOutline,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => Solar::ReorderOutline,
        TablesIconAlias::ACTIONS_FILTER => Solar::FilterOutline,
        TablesIconAlias::ACTIONS_GROUP => Solar::MenuDotsOutline,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => Solar::HamburgerMenuOutline,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => Solar::AltArrowDownOutline,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Solar::CheckCircleOutline,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Solar::CheckCircleOutline,
        TablesIconAlias::EMPTY_STATE => Solar::InboxOutline,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => Solar::CheckCircleOutline,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => Solar::CalendarMinimalisticOutline,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => Solar::HashtagOutline,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => Solar::LinkOutline,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => Solar::HamburgerMenuOutline,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => Solar::TextOutline,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => Solar::CloseCircleOutline,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => Solar::AltArrowDownOutline,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => Solar::ArrowUpOutline,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => Solar::SortVerticalOutline,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => Solar::ArrowDownOutline,
        TablesIconAlias::REORDER_HANDLE => Solar::ReorderOutline,
        TablesIconAlias::SEARCH_FIELD => Solar::MinimalisticMagniferOutline,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => Solar::InboxOutline,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => Solar::CloseCircleOutline,
        NotificationsIconAlias::NOTIFICATION_DANGER => Solar::DangerCircleOutline,
        NotificationsIconAlias::NOTIFICATION_INFO => Solar::InfoCircleOutline,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => Solar::CheckCircleOutline,
        NotificationsIconAlias::NOTIFICATION_WARNING => Solar::DangerTriangleOutline,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => Solar::MenuDotsOutline,
        ActionsIconAlias::CREATE_ACTION_GROUPED => Solar::AddCircleOutline,
        ActionsIconAlias::DELETE_ACTION => Solar::TrashBinMinimalisticOutline,
        ActionsIconAlias::DELETE_ACTION_GROUPED => Solar::TrashBinMinimalisticOutline,
        ActionsIconAlias::DELETE_ACTION_MODAL => Solar::TrashBinMinimalisticOutline,
        ActionsIconAlias::DETACH_ACTION => Solar::LinkBrokenOutline,
        ActionsIconAlias::DETACH_ACTION_MODAL => Solar::LinkBrokenOutline,
        ActionsIconAlias::DISSOCIATE_ACTION => Solar::LinkBrokenOutline,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => Solar::LinkBrokenOutline,
        ActionsIconAlias::EDIT_ACTION => Solar::PenOutline,
        ActionsIconAlias::EDIT_ACTION_GROUPED => Solar::PenOutline,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => Solar::DownloadOutline,
        ActionsIconAlias::FORCE_DELETE_ACTION => Solar::TrashBinMinimalisticOutline,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => Solar::TrashBinMinimalisticOutline,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => Solar::TrashBinMinimalisticOutline,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => Solar::UploadOutline,
        ActionsIconAlias::MODAL_CONFIRMATION => Solar::CheckCircleOutline,
        ActionsIconAlias::REPLICATE_ACTION => Solar::CopyOutline,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => Solar::CopyOutline,
        ActionsIconAlias::RESTORE_ACTION => Solar::RestartOutline,
        ActionsIconAlias::RESTORE_ACTION_MODAL => Solar::RestartOutline,
        ActionsIconAlias::VIEW_ACTION => Solar::EyeOutline,
        ActionsIconAlias::VIEW_ACTION_GROUPED => Solar::EyeOutline,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => Solar::CheckCircleOutline,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => Solar::CheckCircleOutline,

        // Schema icon aliases
        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => Solar::CheckCircleOutline,


        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => Solar::TrashBinMinimalisticOutline,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => Solar::AltArrowRightOutline,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => Solar::AltArrowLeftOutline,
        SupportIconAlias::MODAL_CLOSE_BUTTON => Solar::CloseCircleOutline,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => Solar::DoubleAltArrowLeftOutline,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => Solar::DoubleAltArrowRightOutline,
        SupportIconAlias::PAGINATION_LAST_BUTTON => Solar::DoubleAltArrowRightOutline,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => Solar::DoubleAltArrowLeftOutline,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => Solar::AltArrowRightOutline,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => Solar::AltArrowRightOutline,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => Solar::AltArrowRightOutline,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => Solar::AltArrowRightOutline,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => Solar::AltArrowDownOutline
    ];
}
