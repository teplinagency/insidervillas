<?php

$dir = realpath( __DIR__ . '/..' );

return array (
  'AC\\Addon' => $dir . '/classes/Addon.php',
  'AC\\AdminColumns' => $dir . '/classes/AdminColumns.php',
  'AC\\AdminFactoryInterface' => $dir . '/classes/AdminFactoryInterface.php',
  'AC\\Admin\\AddonStatus' => $dir . '/classes/Admin/AddonStatus.php',
  'AC\\Admin\\Admin' => $dir . '/classes/Admin/Admin.php',
  'AC\\Admin\\AdminNetwork' => $dir . '/classes/Admin/AdminNetwork.php',
  'AC\\Admin\\AdminScripts' => $dir . '/classes/Admin/AdminScripts.php',
  'AC\\Admin\\Asset\\Addons' => $dir . '/classes/Admin/Asset/Addons.php',
  'AC\\Admin\\Asset\\Columns' => $dir . '/classes/Admin/Asset/Columns.php',
  'AC\\Admin\\Banner' => $dir . '/classes/Admin/Banner.php',
  'AC\\Admin\\HelpTab' => $dir . '/classes/Admin/HelpTab.php',
  'AC\\Admin\\HelpTab\\Basics' => $dir . '/classes/Admin/HelpTab/Basics.php',
  'AC\\Admin\\HelpTab\\CustomField' => $dir . '/classes/Admin/HelpTab/CustomField.php',
  'AC\\Admin\\HelpTab\\Introduction' => $dir . '/classes/Admin/HelpTab/Introduction.php',
  'AC\\Admin\\Helpable' => $dir . '/classes/Admin/Helpable.php',
  'AC\\Admin\\MainFactory' => $dir . '/classes/Admin/MainFactory.php',
  'AC\\Admin\\MainFactoryInterface' => $dir . '/classes/Admin/MainFactoryInterface.php',
  'AC\\Admin\\Main\\Addons' => $dir . '/classes/Admin/Main/Addons.php',
  'AC\\Admin\\Main\\Columns' => $dir . '/classes/Admin/Main/Columns.php',
  'AC\\Admin\\Main\\Help' => $dir . '/classes/Admin/Main/Help.php',
  'AC\\Admin\\Main\\Settings' => $dir . '/classes/Admin/Main/Settings.php',
  'AC\\Admin\\Menu' => $dir . '/classes/Admin/Menu.php',
  'AC\\Admin\\MenuFactory' => $dir . '/classes/Admin/MenuFactory.php',
  'AC\\Admin\\MenuFactoryInterface' => $dir . '/classes/Admin/MenuFactoryInterface.php',
  'AC\\Admin\\Menu\\Item' => $dir . '/classes/Admin/Menu/Item.php',
  'AC\\Admin\\NetworkRequestHandler' => $dir . '/classes/Admin/NetworkRequestHandler.php',
  'AC\\Admin\\Notice\\ReadOnly' => $dir . '/classes/Admin/Notice/ReadOnly.php',
  'AC\\Admin\\Page' => $dir . '/classes/Admin/Page.php',
  'AC\\Admin\\PageFactory' => $dir . '/classes/Admin/PageFactory.php',
  'AC\\Admin\\PageFactoryInterface' => $dir . '/classes/Admin/PageFactoryInterface.php',
  'AC\\Admin\\PageRequestHandler' => $dir . '/classes/Admin/PageRequestHandler.php',
  'AC\\Admin\\Preference\\ListScreen' => $dir . '/classes/Admin/Preference/ListScreen.php',
  'AC\\Admin\\Preference\\ScreenOptions' => $dir . '/classes/Admin/Preference/ScreenOptions.php',
  'AC\\Admin\\RequestHandler' => $dir . '/classes/Admin/RequestHandler.php',
  'AC\\Admin\\RequestHandlerInterface' => $dir . '/classes/Admin/RequestHandlerInterface.php',
  'AC\\Admin\\ScreenOption' => $dir . '/classes/Admin/ScreenOption.php',
  'AC\\Admin\\ScreenOption\\ColumnId' => $dir . '/classes/Admin/ScreenOption/ColumnId.php',
  'AC\\Admin\\ScreenOption\\ColumnType' => $dir . '/classes/Admin/ScreenOption/ColumnType.php',
  'AC\\Admin\\ScreenOption\\ListScreenId' => $dir . '/classes/Admin/ScreenOption/ListScreenId.php',
  'AC\\Admin\\ScreenOption\\ListScreenType' => $dir . '/classes/Admin/ScreenOption/ListScreenType.php',
  'AC\\Admin\\ScreenOptions' => $dir . '/classes/Admin/ScreenOptions.php',
  'AC\\Admin\\Section' => $dir . '/classes/Admin/Section.php',
  'AC\\Admin\\SectionCollection' => $dir . '/classes/Admin/SectionCollection.php',
  'AC\\Admin\\Section\\General' => $dir . '/classes/Admin/Section/General.php',
  'AC\\Admin\\Section\\Partial\\Menu' => $dir . '/classes/Admin/Section/Partial/Menu.php',
  'AC\\Admin\\Section\\Partial\\ShowEditButton' => $dir . '/classes/Admin/Section/Partial/ShowEditButton.php',
  'AC\\Admin\\Section\\Restore' => $dir . '/classes/Admin/Section/Restore.php',
  'AC\\Admin\\Table' => $dir . '/classes/Admin/Table.php',
  'AC\\Admin\\Tooltip' => $dir . '/classes/Admin/Tooltip.php',
  'AC\\Admin\\WpMenuFactory' => $dir . '/classes/Admin/WpMenuFactory.php',
  'AC\\Ajax\\Handler' => $dir . '/classes/Ajax/Handler.php',
  'AC\\Ajax\\NullHandler' => $dir . '/classes/Ajax/NullHandler.php',
  'AC\\Ajax\\NumberFormat' => $dir . '/classes/Ajax/NumberFormat.php',
  'AC\\ApplyFilter' => $dir . '/classes/ApplyFilter.php',
  'AC\\ArrayIterator' => $dir . '/classes/ArrayIterator.php',
  'AC\\Asset\\Assets' => $dir . '/classes/Asset/Assets.php',
  'AC\\Asset\\Enqueueable' => $dir . '/classes/Asset/Enqueueable.php',
  'AC\\Asset\\Enqueueables' => $dir . '/classes/Asset/Enqueueables.php',
  'AC\\Asset\\Location' => $dir . '/classes/Asset/Location.php',
  'AC\\Asset\\Location\\Absolute' => $dir . '/classes/Asset/Location/Absolute.php',
  'AC\\Asset\\Script' => $dir . '/classes/Asset/Script.php',
  'AC\\Asset\\Style' => $dir . '/classes/Asset/Style.php',
  'AC\\Autoloader' => $dir . '/classes/Autoloader.php',
  'AC\\Autoloader\\Underscore' => $dir . '/classes/Autoloader/Underscore.php',
  'AC\\Builder' => $dir . '/classes/Builder.php',
  'AC\\Capabilities' => $dir . '/classes/Capabilities.php',
  'AC\\Capabilities\\Manage' => $dir . '/classes/Capabilities/Manage.php',
  'AC\\Check\\AddonAvailable' => $dir . '/classes/Check/AddonAvailable.php',
  'AC\\Check\\Promotion' => $dir . '/classes/Check/Promotion.php',
  'AC\\Check\\Review' => $dir . '/classes/Check/Review.php',
  'AC\\Collection' => $dir . '/classes/Collection.php',
  'AC\\Column' => $dir . '/classes/Column.php',
  'AC\\ColumnGroups' => $dir . '/classes/ColumnGroups.php',
  'AC\\ColumnRepository' => $dir . '/classes/ColumnRepository.php',
  'AC\\ColumnRepository\\Filter' => $dir . '/classes/ColumnRepository/Filter.php',
  'AC\\ColumnRepository\\Sort' => $dir . '/classes/ColumnRepository/Sort.php',
  'AC\\Column\\Actions' => $dir . '/classes/Column/Actions.php',
  'AC\\Column\\AjaxValue' => $dir . '/classes/Column/AjaxValue.php',
  'AC\\Column\\Comment\\Agent' => $dir . '/classes/Column/Comment/Agent.php',
  'AC\\Column\\Comment\\Approved' => $dir . '/classes/Column/Comment/Approved.php',
  'AC\\Column\\Comment\\Author' => $dir . '/classes/Column/Comment/Author.php',
  'AC\\Column\\Comment\\AuthorAvatar' => $dir . '/classes/Column/Comment/AuthorAvatar.php',
  'AC\\Column\\Comment\\AuthorEmail' => $dir . '/classes/Column/Comment/AuthorEmail.php',
  'AC\\Column\\Comment\\AuthorIP' => $dir . '/classes/Column/Comment/AuthorIP.php',
  'AC\\Column\\Comment\\AuthorName' => $dir . '/classes/Column/Comment/AuthorName.php',
  'AC\\Column\\Comment\\AuthorUrl' => $dir . '/classes/Column/Comment/AuthorUrl.php',
  'AC\\Column\\Comment\\Comment' => $dir . '/classes/Column/Comment/Comment.php',
  'AC\\Column\\Comment\\Date' => $dir . '/classes/Column/Comment/Date.php',
  'AC\\Column\\Comment\\DateGmt' => $dir . '/classes/Column/Comment/DateGmt.php',
  'AC\\Column\\Comment\\Excerpt' => $dir . '/classes/Column/Comment/Excerpt.php',
  'AC\\Column\\Comment\\ID' => $dir . '/classes/Column/Comment/ID.php',
  'AC\\Column\\Comment\\Post' => $dir . '/classes/Column/Comment/Post.php',
  'AC\\Column\\Comment\\ReplyTo' => $dir . '/classes/Column/Comment/ReplyTo.php',
  'AC\\Column\\Comment\\Response' => $dir . '/classes/Column/Comment/Response.php',
  'AC\\Column\\Comment\\Status' => $dir . '/classes/Column/Comment/Status.php',
  'AC\\Column\\Comment\\Type' => $dir . '/classes/Column/Comment/Type.php',
  'AC\\Column\\Comment\\User' => $dir . '/classes/Column/Comment/User.php',
  'AC\\Column\\Comment\\WordCount' => $dir . '/classes/Column/Comment/WordCount.php',
  'AC\\Column\\CustomField' => $dir . '/classes/Column/CustomField.php',
  'AC\\Column\\Media\\AlternateText' => $dir . '/classes/Column/Media/AlternateText.php',
  'AC\\Column\\Media\\Author' => $dir . '/classes/Column/Media/Author.php',
  'AC\\Column\\Media\\AuthorName' => $dir . '/classes/Column/Media/AuthorName.php',
  'AC\\Column\\Media\\AvailableSizes' => $dir . '/classes/Column/Media/AvailableSizes.php',
  'AC\\Column\\Media\\Caption' => $dir . '/classes/Column/Media/Caption.php',
  'AC\\Column\\Media\\Comments' => $dir . '/classes/Column/Media/Comments.php',
  'AC\\Column\\Media\\Date' => $dir . '/classes/Column/Media/Date.php',
  'AC\\Column\\Media\\Description' => $dir . '/classes/Column/Media/Description.php',
  'AC\\Column\\Media\\Dimensions' => $dir . '/classes/Column/Media/Dimensions.php',
  'AC\\Column\\Media\\Download' => $dir . '/classes/Column/Media/Download.php',
  'AC\\Column\\Media\\ExifData' => $dir . '/classes/Column/Media/ExifData.php',
  'AC\\Column\\Media\\FileName' => $dir . '/classes/Column/Media/FileName.php',
  'AC\\Column\\Media\\FileSize' => $dir . '/classes/Column/Media/FileSize.php',
  'AC\\Column\\Media\\FullPath' => $dir . '/classes/Column/Media/FullPath.php',
  'AC\\Column\\Media\\Height' => $dir . '/classes/Column/Media/Height.php',
  'AC\\Column\\Media\\ID' => $dir . '/classes/Column/Media/ID.php',
  'AC\\Column\\Media\\MediaParent' => $dir . '/classes/Column/Media/MediaParent.php',
  'AC\\Column\\Media\\Menu' => $dir . '/classes/Column/Media/Menu.php',
  'AC\\Column\\Media\\Meta' => $dir . '/classes/Column/Media/Meta.php',
  'AC\\Column\\Media\\MetaValue' => $dir . '/classes/Column/Media/MetaValue.php',
  'AC\\Column\\Media\\MimeType' => $dir . '/classes/Column/Media/MimeType.php',
  'AC\\Column\\Media\\Taxonomy' => $dir . '/classes/Column/Media/Taxonomy.php',
  'AC\\Column\\Media\\Title' => $dir . '/classes/Column/Media/Title.php',
  'AC\\Column\\Media\\Width' => $dir . '/classes/Column/Media/Width.php',
  'AC\\Column\\Menu' => $dir . '/classes/Column/Menu.php',
  'AC\\Column\\Meta' => $dir . '/classes/Column/Meta.php',
  'AC\\Column\\Placeholder' => $dir . '/classes/Column/Placeholder.php',
  'AC\\Column\\Post\\Attachment' => $dir . '/classes/Column/Post/Attachment.php',
  'AC\\Column\\Post\\Author' => $dir . '/classes/Column/Post/Author.php',
  'AC\\Column\\Post\\AuthorName' => $dir . '/classes/Column/Post/AuthorName.php',
  'AC\\Column\\Post\\BeforeMoreTag' => $dir . '/classes/Column/Post/BeforeMoreTag.php',
  'AC\\Column\\Post\\Categories' => $dir . '/classes/Column/Post/Categories.php',
  'AC\\Column\\Post\\CommentCount' => $dir . '/classes/Column/Post/CommentCount.php',
  'AC\\Column\\Post\\CommentStatus' => $dir . '/classes/Column/Post/CommentStatus.php',
  'AC\\Column\\Post\\Comments' => $dir . '/classes/Column/Post/Comments.php',
  'AC\\Column\\Post\\Content' => $dir . '/classes/Column/Post/Content.php',
  'AC\\Column\\Post\\Date' => $dir . '/classes/Column/Post/Date.php',
  'AC\\Column\\Post\\DatePublished' => $dir . '/classes/Column/Post/DatePublished.php',
  'AC\\Column\\Post\\Depth' => $dir . '/classes/Column/Post/Depth.php',
  'AC\\Column\\Post\\EstimatedReadingTime' => $dir . '/classes/Column/Post/EstimatedReadingTime.php',
  'AC\\Column\\Post\\Excerpt' => $dir . '/classes/Column/Post/Excerpt.php',
  'AC\\Column\\Post\\FeaturedImage' => $dir . '/classes/Column/Post/FeaturedImage.php',
  'AC\\Column\\Post\\Formats' => $dir . '/classes/Column/Post/Formats.php',
  'AC\\Column\\Post\\ID' => $dir . '/classes/Column/Post/ID.php',
  'AC\\Column\\Post\\LastModifiedAuthor' => $dir . '/classes/Column/Post/LastModifiedAuthor.php',
  'AC\\Column\\Post\\Menu' => $dir . '/classes/Column/Post/Menu.php',
  'AC\\Column\\Post\\Modified' => $dir . '/classes/Column/Post/Modified.php',
  'AC\\Column\\Post\\Order' => $dir . '/classes/Column/Post/Order.php',
  'AC\\Column\\Post\\PageTemplate' => $dir . '/classes/Column/Post/PageTemplate.php',
  'AC\\Column\\Post\\PasswordProtected' => $dir . '/classes/Column/Post/PasswordProtected.php',
  'AC\\Column\\Post\\Path' => $dir . '/classes/Column/Post/Path.php',
  'AC\\Column\\Post\\Permalink' => $dir . '/classes/Column/Post/Permalink.php',
  'AC\\Column\\Post\\PingStatus' => $dir . '/classes/Column/Post/PingStatus.php',
  'AC\\Column\\Post\\PostParent' => $dir . '/classes/Column/Post/PostParent.php',
  'AC\\Column\\Post\\Shortcodes' => $dir . '/classes/Column/Post/Shortcodes.php',
  'AC\\Column\\Post\\Shortlink' => $dir . '/classes/Column/Post/Shortlink.php',
  'AC\\Column\\Post\\Slug' => $dir . '/classes/Column/Post/Slug.php',
  'AC\\Column\\Post\\Status' => $dir . '/classes/Column/Post/Status.php',
  'AC\\Column\\Post\\Sticky' => $dir . '/classes/Column/Post/Sticky.php',
  'AC\\Column\\Post\\Tags' => $dir . '/classes/Column/Post/Tags.php',
  'AC\\Column\\Post\\Taxonomy' => $dir . '/classes/Column/Post/Taxonomy.php',
  'AC\\Column\\Post\\Title' => $dir . '/classes/Column/Post/Title.php',
  'AC\\Column\\Post\\TitleRaw' => $dir . '/classes/Column/Post/TitleRaw.php',
  'AC\\Column\\Post\\WordCount' => $dir . '/classes/Column/Post/WordCount.php',
  'AC\\Column\\Relation' => $dir . '/classes/Column/Relation.php',
  'AC\\Column\\Taxonomy' => $dir . '/classes/Column/Taxonomy.php',
  'AC\\Column\\User\\CommentCount' => $dir . '/classes/Column/User/CommentCount.php',
  'AC\\Column\\User\\Description' => $dir . '/classes/Column/User/Description.php',
  'AC\\Column\\User\\DisplayName' => $dir . '/classes/Column/User/DisplayName.php',
  'AC\\Column\\User\\Email' => $dir . '/classes/Column/User/Email.php',
  'AC\\Column\\User\\FirstName' => $dir . '/classes/Column/User/FirstName.php',
  'AC\\Column\\User\\FirstPost' => $dir . '/classes/Column/User/FirstPost.php',
  'AC\\Column\\User\\FullName' => $dir . '/classes/Column/User/FullName.php',
  'AC\\Column\\User\\ID' => $dir . '/classes/Column/User/ID.php',
  'AC\\Column\\User\\LastName' => $dir . '/classes/Column/User/LastName.php',
  'AC\\Column\\User\\LastPost' => $dir . '/classes/Column/User/LastPost.php',
  'AC\\Column\\User\\Login' => $dir . '/classes/Column/User/Login.php',
  'AC\\Column\\User\\Name' => $dir . '/classes/Column/User/Name.php',
  'AC\\Column\\User\\Nicename' => $dir . '/classes/Column/User/Nicename.php',
  'AC\\Column\\User\\Nickname' => $dir . '/classes/Column/User/Nickname.php',
  'AC\\Column\\User\\PostCount' => $dir . '/classes/Column/User/PostCount.php',
  'AC\\Column\\User\\Posts' => $dir . '/classes/Column/User/Posts.php',
  'AC\\Column\\User\\Registered' => $dir . '/classes/Column/User/Registered.php',
  'AC\\Column\\User\\RichEditing' => $dir . '/classes/Column/User/RichEditing.php',
  'AC\\Column\\User\\Role' => $dir . '/classes/Column/User/Role.php',
  'AC\\Column\\User\\ShowToolbar' => $dir . '/classes/Column/User/ShowToolbar.php',
  'AC\\Column\\User\\Url' => $dir . '/classes/Column/User/Url.php',
  'AC\\Column\\User\\Username' => $dir . '/classes/Column/User/Username.php',
  'AC\\Column\\WooCommercePlaceholder' => $dir . '/classes/Column/WooCommercePlaceholder.php',
  'AC\\Config' => $dir . '/classes/Config.php',
  'AC\\Controller\\AjaxColumnRequest' => $dir . '/classes/Controller/AjaxColumnRequest.php',
  'AC\\Controller\\AjaxColumnValue' => $dir . '/classes/Controller/AjaxColumnValue.php',
  'AC\\Controller\\AjaxRequestCustomFieldKeys' => $dir . '/classes/Controller/AjaxRequestCustomFieldKeys.php',
  'AC\\Controller\\AjaxScreenOptions' => $dir . '/classes/Controller/AjaxScreenOptions.php',
  'AC\\Controller\\ColumnRequest' => $dir . '/classes/Controller/ColumnRequest.php',
  'AC\\Controller\\ColumnRequest\\Refresh' => $dir . '/classes/Controller/ColumnRequest/Refresh.php',
  'AC\\Controller\\ColumnRequest\\Select' => $dir . '/classes/Controller/ColumnRequest/Select.php',
  'AC\\Controller\\DefaultColumns' => $dir . '/classes/Controller/DefaultColumns.php',
  'AC\\Controller\\ListScreenRestoreColumns' => $dir . '/classes/Controller/ListScreenRestoreColumns.php',
  'AC\\Controller\\ListScreen\\Sanitize\\FormData' => $dir . '/classes/Controller/ListScreen/Sanitize/FormData.php',
  'AC\\Controller\\ListScreen\\Sanitize\\Title' => $dir . '/classes/Controller/ListScreen/Sanitize/Title.php',
  'AC\\Controller\\ListScreen\\Save' => $dir . '/classes/Controller/ListScreen/Save.php',
  'AC\\Controller\\Middleware\\ListScreenAdmin' => $dir . '/classes/Controller/Middleware/ListScreenAdmin.php',
  'AC\\Controller\\Middleware\\ListScreenTable' => $dir . '/classes/Controller/Middleware/ListScreenTable.php',
  'AC\\Controller\\RedirectAddonStatus' => $dir . '/classes/Controller/RedirectAddonStatus.php',
  'AC\\Controller\\RestoreSettingsRequest' => $dir . '/classes/Controller/RestoreSettingsRequest.php',
  'AC\\Controller\\TableListScreenSetter' => $dir . '/classes/Controller/TableListScreenSetter.php',
  'AC\\DefaultColumnsRepository' => $dir . '/classes/DefaultColumnsRepository.php',
  'AC\\Dependencies' => $dir . '/classes/Dependencies.php',
  'AC\\Deprecated\\Hook' => $dir . '/classes/Deprecated/Hook.php',
  'AC\\Deprecated\\Hook\\Action' => $dir . '/classes/Deprecated/Hook/Action.php',
  'AC\\Deprecated\\Hook\\Filter' => $dir . '/classes/Deprecated/Hook/Filter.php',
  'AC\\Deprecated\\Hooks' => $dir . '/classes/Deprecated/Hooks.php',
  'AC\\EncodedListScreenData' => $dir . '/classes/EncodedListScreenData.php',
  'AC\\EncodedListScreenDataFactory' => $dir . '/classes/EncodedListScreenDataFactory.php',
  'AC\\Exception\\MissingListScreenIdException' => $dir . '/classes/Exception/MissingListScreenIdException.php',
  'AC\\Exception\\RequestException' => $dir . '/classes/Exception/RequestException.php',
  'AC\\Exception\\SourceNotAvailableException' => $dir . '/classes/Exception/SourceNotAvailableException.php',
  'AC\\Expirable' => $dir . '/classes/Expirable.php',
  'AC\\Form\\Element' => $dir . '/classes/Form/Element.php',
  'AC\\Form\\Element\\Checkbox' => $dir . '/classes/Form/Element/Checkbox.php',
  'AC\\Form\\Element\\Input' => $dir . '/classes/Form/Element/Input.php',
  'AC\\Form\\Element\\MultiSelect' => $dir . '/classes/Form/Element/MultiSelect.php',
  'AC\\Form\\Element\\Radio' => $dir . '/classes/Form/Element/Radio.php',
  'AC\\Form\\Element\\Select' => $dir . '/classes/Form/Element/Select.php',
  'AC\\Groups' => $dir . '/classes/Groups.php',
  'AC\\Helper' => $dir . '/classes/Helper.php',
  'AC\\Helper\\Arrays' => $dir . '/classes/Helper/Arrays.php',
  'AC\\Helper\\Date' => $dir . '/classes/Helper/Date.php',
  'AC\\Helper\\File' => $dir . '/classes/Helper/File.php',
  'AC\\Helper\\Html' => $dir . '/classes/Helper/Html.php',
  'AC\\Helper\\Icon' => $dir . '/classes/Helper/Icon.php',
  'AC\\Helper\\Image' => $dir . '/classes/Helper/Image.php',
  'AC\\Helper\\Media' => $dir . '/classes/Helper/Media.php',
  'AC\\Helper\\Network' => $dir . '/classes/Helper/Network.php',
  'AC\\Helper\\Post' => $dir . '/classes/Helper/Post.php',
  'AC\\Helper\\Select\\Entities' => $dir . '/classes/Helper/Select/Entities.php',
  'AC\\Helper\\Select\\Entities\\CustomFields' => $dir . '/classes/Helper/Select/Entities/CustomFields.php',
  'AC\\Helper\\Select\\Formatter' => $dir . '/classes/Helper/Select/Formatter.php',
  'AC\\Helper\\Select\\Formatter\\NullFormatter' => $dir . '/classes/Helper/Select/Formatter/NullFormatter.php',
  'AC\\Helper\\Select\\Group' => $dir . '/classes/Helper/Select/Group.php',
  'AC\\Helper\\Select\\Group\\CustomField' => $dir . '/classes/Helper/Select/Group/CustomField.php',
  'AC\\Helper\\Select\\Group\\CustomField\\MultiSite' => $dir . '/classes/Helper/Select/Group/CustomField/MultiSite.php',
  'AC\\Helper\\Select\\MetaValuesFactory' => $dir . '/classes/Helper/Select/MetaValuesFactory.php',
  'AC\\Helper\\Select\\Option' => $dir . '/classes/Helper/Select/Option.php',
  'AC\\Helper\\Select\\OptionGroup' => $dir . '/classes/Helper/Select/OptionGroup.php',
  'AC\\Helper\\Select\\Options' => $dir . '/classes/Helper/Select/Options.php',
  'AC\\Helper\\Select\\Options\\Paginated' => $dir . '/classes/Helper/Select/Options/Paginated.php',
  'AC\\Helper\\Select\\Paginated' => $dir . '/classes/Helper/Select/Paginated.php',
  'AC\\Helper\\Select\\Response' => $dir . '/classes/Helper/Select/Response.php',
  'AC\\Helper\\Select\\Value' => $dir . '/classes/Helper/Select/Value.php',
  'AC\\Helper\\Select\\Value\\NullFormatter' => $dir . '/classes/Helper/Select/Value/NullFormatter.php',
  'AC\\Helper\\Strings' => $dir . '/classes/Helper/Strings.php',
  'AC\\Helper\\Taxonomy' => $dir . '/classes/Helper/Taxonomy.php',
  'AC\\Helper\\User' => $dir . '/classes/Helper/User.php',
  'AC\\Installer' => $dir . '/classes/Installer.php',
  'AC\\Integration' => $dir . '/classes/Integration.php',
  'AC\\Integration\\ACF' => $dir . '/classes/Integration/ACF.php',
  'AC\\Integration\\BuddyPress' => $dir . '/classes/Integration/BuddyPress.php',
  'AC\\Integration\\EventsCalendar' => $dir . '/classes/Integration/EventsCalendar.php',
  'AC\\Integration\\GravityForms' => $dir . '/classes/Integration/GravityForms.php',
  'AC\\Integration\\MetaBox' => $dir . '/classes/Integration/MetaBox.php',
  'AC\\Integration\\NinjaForms' => $dir . '/classes/Integration/NinjaForms.php',
  'AC\\Integration\\Pods' => $dir . '/classes/Integration/Pods.php',
  'AC\\Integration\\Types' => $dir . '/classes/Integration/Types.php',
  'AC\\Integration\\WooCommerce' => $dir . '/classes/Integration/WooCommerce.php',
  'AC\\Integration\\YoastSeo' => $dir . '/classes/Integration/YoastSeo.php',
  'AC\\Integrations' => $dir . '/classes/Integrations.php',
  'AC\\ListScreen' => $dir . '/classes/ListScreen.php',
  'AC\\ListScreenCollection' => $dir . '/classes/ListScreenCollection.php',
  'AC\\ListScreenFactory' => $dir . '/classes/ListScreenFactory.php',
  'AC\\ListScreenGroups' => $dir . '/classes/ListScreenGroups.php',
  'AC\\ListScreenPost' => $dir . '/classes/ListScreenPost.php',
  'AC\\ListScreenRepository' => $dir . '/classes/ListScreenRepository.php',
  'AC\\ListScreenRepositoryWritable' => $dir . '/classes/ListScreenRepositoryWritable.php',
  'AC\\ListScreenRepository\\Database' => $dir . '/classes/ListScreenRepository/Database.php',
  'AC\\ListScreenRepository\\Filter' => $dir . '/classes/ListScreenRepository/Filter.php',
  'AC\\ListScreenRepository\\Filter\\ExcludeNetwork' => $dir . '/classes/ListScreenRepository/Filter/ExcludeNetwork.php',
  'AC\\ListScreenRepository\\Filter\\HasKey' => $dir . '/classes/ListScreenRepository/Filter/HasKey.php',
  'AC\\ListScreenRepository\\Filter\\Network' => $dir . '/classes/ListScreenRepository/Filter/Network.php',
  'AC\\ListScreenRepository\\Filter\\Permission' => $dir . '/classes/ListScreenRepository/Filter/Permission.php',
  'AC\\ListScreenRepository\\Rule' => $dir . '/classes/ListScreenRepository/Rule.php',
  'AC\\ListScreenRepository\\Rule\\EqualGroup' => $dir . '/classes/ListScreenRepository/Rule/EqualGroup.php',
  'AC\\ListScreenRepository\\Rule\\EqualId' => $dir . '/classes/ListScreenRepository/Rule/EqualId.php',
  'AC\\ListScreenRepository\\Rule\\EqualType' => $dir . '/classes/ListScreenRepository/Rule/EqualType.php',
  'AC\\ListScreenRepository\\Rules' => $dir . '/classes/ListScreenRepository/Rules.php',
  'AC\\ListScreenRepository\\Sort' => $dir . '/classes/ListScreenRepository/Sort.php',
  'AC\\ListScreenRepository\\Sort\\Label' => $dir . '/classes/ListScreenRepository/Sort/Label.php',
  'AC\\ListScreenRepository\\Sort\\ManualOrder' => $dir . '/classes/ListScreenRepository/Sort/ManualOrder.php',
  'AC\\ListScreenRepository\\SourceAware' => $dir . '/classes/ListScreenRepository/SourceAware.php',
  'AC\\ListScreenRepository\\Storage' => $dir . '/classes/ListScreenRepository/Storage.php',
  'AC\\ListScreenRepository\\Storage\\ListScreenRepository' => $dir . '/classes/ListScreenRepository/Storage/ListScreenRepository.php',
  'AC\\ListScreenRepository\\Storage\\ListScreenRepositoryFactory' => $dir . '/classes/ListScreenRepository/Storage/ListScreenRepositoryFactory.php',
  'AC\\ListScreenTypes' => $dir . '/classes/ListScreenTypes.php',
  'AC\\ListScreenWP' => $dir . '/classes/ListScreenWP.php',
  'AC\\ListScreen\\Comment' => $dir . '/classes/ListScreen/Comment.php',
  'AC\\ListScreen\\Media' => $dir . '/classes/ListScreen/Media.php',
  'AC\\ListScreen\\Post' => $dir . '/classes/ListScreen/Post.php',
  'AC\\ListScreen\\User' => $dir . '/classes/ListScreen/User.php',
  'AC\\ListScreens' => $dir . '/classes/ListScreens.php',
  'AC\\ListTable' => $dir . '/classes/ListTable.php',
  'AC\\ListTableFactory' => $dir . '/classes/ListTableFactory.php',
  'AC\\ListTable\\Comment' => $dir . '/classes/ListTable/Comment.php',
  'AC\\ListTable\\Media' => $dir . '/classes/ListTable/Media.php',
  'AC\\ListTable\\NetworkSite' => $dir . '/classes/ListTable/NetworkSite.php',
  'AC\\ListTable\\NetworkUser' => $dir . '/classes/ListTable/NetworkUser.php',
  'AC\\ListTable\\Post' => $dir . '/classes/ListTable/Post.php',
  'AC\\ListTable\\Taxonomy' => $dir . '/classes/ListTable/Taxonomy.php',
  'AC\\ListTable\\User' => $dir . '/classes/ListTable/User.php',
  'AC\\ListTable\\WpListTableTrait' => $dir . '/classes/ListTable/WpListTableTrait.php',
  'AC\\Message' => $dir . '/classes/Message.php',
  'AC\\Message\\InlineMessage' => $dir . '/classes/Message/InlineMessage.php',
  'AC\\Message\\Notice' => $dir . '/classes/Message/Notice.php',
  'AC\\Message\\Notice\\Dismissible' => $dir . '/classes/Message/Notice/Dismissible.php',
  'AC\\Message\\Plugin' => $dir . '/classes/Message/Plugin.php',
  'AC\\MetaType' => $dir . '/classes/MetaType.php',
  'AC\\Meta\\Query' => $dir . '/classes/Meta/Query.php',
  'AC\\Meta\\QueryColumn' => $dir . '/classes/Meta/QueryColumn.php',
  'AC\\Meta\\QueryMeta' => $dir . '/classes/Meta/QueryMeta.php',
  'AC\\Middleware' => $dir . '/classes/Middleware.php',
  'AC\\NoticeChecks' => $dir . '/classes/NoticeChecks.php',
  'AC\\OpCacheInvalidateTrait' => $dir . '/classes/OpCacheInvalidateTrait.php',
  'AC\\PermissionChecker' => $dir . '/classes/PermissionChecker.php',
  'AC\\Plugin' => $dir . '/classes/Plugin.php',
  'AC\\PluginActionLinks' => $dir . '/classes/PluginActionLinks.php',
  'AC\\PluginInformation' => $dir . '/classes/PluginInformation.php',
  'AC\\Plugin\\Installer' => $dir . '/classes/Plugin/Installer.php',
  'AC\\Plugin\\Update' => $dir . '/classes/Plugin/Update.php',
  'AC\\Plugin\\Update\\V3005' => $dir . '/classes/Plugin/Update/V3005.php',
  'AC\\Plugin\\Update\\V3007' => $dir . '/classes/Plugin/Update/V3007.php',
  'AC\\Plugin\\Update\\V3201' => $dir . '/classes/Plugin/Update/V3201.php',
  'AC\\Plugin\\Update\\V4000' => $dir . '/classes/Plugin/Update/V4000.php',
  'AC\\Plugin\\Updater' => $dir . '/classes/Plugin/Updater.php',
  'AC\\Plugin\\Updater\\Site' => $dir . '/classes/Plugin/Updater/Site.php',
  'AC\\Preferences' => $dir . '/classes/Preferences.php',
  'AC\\Preferences\\Network' => $dir . '/classes/Preferences/Network.php',
  'AC\\Preferences\\Site' => $dir . '/classes/Preferences/Site.php',
  'AC\\Preferences\\User' => $dir . '/classes/Preferences/User.php',
  'AC\\Promo' => $dir . '/classes/Promo.php',
  'AC\\PromoCollection' => $dir . '/classes/PromoCollection.php',
  'AC\\Promo\\BlackFriday' => $dir . '/classes/Promo/BlackFriday.php',
  'AC\\Registrable' => $dir . '/classes/Registrable.php',
  'AC\\Relation' => $dir . '/classes/Relation.php',
  'AC\\Relation\\Post' => $dir . '/classes/Relation/Post.php',
  'AC\\Relation\\Taxonomy' => $dir . '/classes/Relation/Taxonomy.php',
  'AC\\Renderable' => $dir . '/classes/Renderable.php',
  'AC\\Request' => $dir . '/classes/Request.php',
  'AC\\Request\\Parameters' => $dir . '/classes/Request/Parameters.php',
  'AC\\Response\\Json' => $dir . '/classes/Response/Json.php',
  'AC\\Sanitize' => $dir . '/classes/Sanitize.php',
  'AC\\Sanitize\\Kses' => $dir . '/classes/Sanitize/Kses.php',
  'AC\\Screen' => $dir . '/classes/Screen.php',
  'AC\\ScreenController' => $dir . '/classes/ScreenController.php',
  'AC\\Screen\\QuickEdit' => $dir . '/classes/Screen/QuickEdit.php',
  'AC\\Settings\\Column' => $dir . '/classes/Settings/Column.php',
  'AC\\Settings\\Column\\ActionIcons' => $dir . '/classes/Settings/Column/ActionIcons.php',
  'AC\\Settings\\Column\\AttachmentDisplay' => $dir . '/classes/Settings/Column/AttachmentDisplay.php',
  'AC\\Settings\\Column\\BeforeAfter' => $dir . '/classes/Settings/Column/BeforeAfter.php',
  'AC\\Settings\\Column\\BeforeAfter\\Aperture' => $dir . '/classes/Settings/Column/BeforeAfter/Aperture.php',
  'AC\\Settings\\Column\\BeforeAfter\\FocalLength' => $dir . '/classes/Settings/Column/BeforeAfter/FocalLength.php',
  'AC\\Settings\\Column\\BeforeAfter\\ISO' => $dir . '/classes/Settings/Column/BeforeAfter/ISO.php',
  'AC\\Settings\\Column\\BeforeAfter\\ShutterSpeed' => $dir . '/classes/Settings/Column/BeforeAfter/ShutterSpeed.php',
  'AC\\Settings\\Column\\CharacterLimit' => $dir . '/classes/Settings/Column/CharacterLimit.php',
  'AC\\Settings\\Column\\Comment' => $dir . '/classes/Settings/Column/Comment.php',
  'AC\\Settings\\Column\\CommentCount' => $dir . '/classes/Settings/Column/CommentCount.php',
  'AC\\Settings\\Column\\CommentLink' => $dir . '/classes/Settings/Column/CommentLink.php',
  'AC\\Settings\\Column\\CustomField' => $dir . '/classes/Settings/Column/CustomField.php',
  'AC\\Settings\\Column\\CustomFieldType' => $dir . '/classes/Settings/Column/CustomFieldType.php',
  'AC\\Settings\\Column\\Date' => $dir . '/classes/Settings/Column/Date.php',
  'AC\\Settings\\Column\\DateTimeFormat' => $dir . '/classes/Settings/Column/DateTimeFormat.php',
  'AC\\Settings\\Column\\ExifData' => $dir . '/classes/Settings/Column/ExifData.php',
  'AC\\Settings\\Column\\Image' => $dir . '/classes/Settings/Column/Image.php',
  'AC\\Settings\\Column\\Images' => $dir . '/classes/Settings/Column/Images.php',
  'AC\\Settings\\Column\\Label' => $dir . '/classes/Settings/Column/Label.php',
  'AC\\Settings\\Column\\LinkLabel' => $dir . '/classes/Settings/Column/LinkLabel.php',
  'AC\\Settings\\Column\\LinkToMenu' => $dir . '/classes/Settings/Column/LinkToMenu.php',
  'AC\\Settings\\Column\\MediaLink' => $dir . '/classes/Settings/Column/MediaLink.php',
  'AC\\Settings\\Column\\Message' => $dir . '/classes/Settings/Column/Message.php',
  'AC\\Settings\\Column\\Meta' => $dir . '/classes/Settings/Column/Meta.php',
  'AC\\Settings\\Column\\MissingImageSize' => $dir . '/classes/Settings/Column/MissingImageSize.php',
  'AC\\Settings\\Column\\NumberFormat' => $dir . '/classes/Settings/Column/NumberFormat.php',
  'AC\\Settings\\Column\\NumberOfItems' => $dir . '/classes/Settings/Column/NumberOfItems.php',
  'AC\\Settings\\Column\\Password' => $dir . '/classes/Settings/Column/Password.php',
  'AC\\Settings\\Column\\PathScope' => $dir . '/classes/Settings/Column/PathScope.php',
  'AC\\Settings\\Column\\Post' => $dir . '/classes/Settings/Column/Post.php',
  'AC\\Settings\\Column\\PostFormatIcon' => $dir . '/classes/Settings/Column/PostFormatIcon.php',
  'AC\\Settings\\Column\\PostLink' => $dir . '/classes/Settings/Column/PostLink.php',
  'AC\\Settings\\Column\\PostStatus' => $dir . '/classes/Settings/Column/PostStatus.php',
  'AC\\Settings\\Column\\PostType' => $dir . '/classes/Settings/Column/PostType.php',
  'AC\\Settings\\Column\\Pro' => $dir . '/classes/Settings/Column/Pro.php',
  'AC\\Settings\\Column\\Pro\\BulkEditing' => $dir . '/classes/Settings/Column/Pro/BulkEditing.php',
  'AC\\Settings\\Column\\Pro\\Export' => $dir . '/classes/Settings/Column/Pro/Export.php',
  'AC\\Settings\\Column\\Pro\\InlineEditing' => $dir . '/classes/Settings/Column/Pro/InlineEditing.php',
  'AC\\Settings\\Column\\Pro\\SmartFiltering' => $dir . '/classes/Settings/Column/Pro/SmartFiltering.php',
  'AC\\Settings\\Column\\Pro\\Sorting' => $dir . '/classes/Settings/Column/Pro/Sorting.php',
  'AC\\Settings\\Column\\Separator' => $dir . '/classes/Settings/Column/Separator.php',
  'AC\\Settings\\Column\\StatusIcon' => $dir . '/classes/Settings/Column/StatusIcon.php',
  'AC\\Settings\\Column\\StringLimit' => $dir . '/classes/Settings/Column/StringLimit.php',
  'AC\\Settings\\Column\\Taxonomy' => $dir . '/classes/Settings/Column/Taxonomy.php',
  'AC\\Settings\\Column\\Term' => $dir . '/classes/Settings/Column/Term.php',
  'AC\\Settings\\Column\\TermLink' => $dir . '/classes/Settings/Column/TermLink.php',
  'AC\\Settings\\Column\\Time' => $dir . '/classes/Settings/Column/Time.php',
  'AC\\Settings\\Column\\Toggle' => $dir . '/classes/Settings/Column/Toggle.php',
  'AC\\Settings\\Column\\Type' => $dir . '/classes/Settings/Column/Type.php',
  'AC\\Settings\\Column\\User' => $dir . '/classes/Settings/Column/User.php',
  'AC\\Settings\\Column\\UserLink' => $dir . '/classes/Settings/Column/UserLink.php',
  'AC\\Settings\\Column\\Width' => $dir . '/classes/Settings/Column/Width.php',
  'AC\\Settings\\Column\\WordLimit' => $dir . '/classes/Settings/Column/WordLimit.php',
  'AC\\Settings\\Column\\WordsPerMinute' => $dir . '/classes/Settings/Column/WordsPerMinute.php',
  'AC\\Settings\\Form\\Element\\Select' => $dir . '/classes/Settings/Form/Element/Select.php',
  'AC\\Settings\\FormatCollection' => $dir . '/classes/Settings/FormatCollection.php',
  'AC\\Settings\\FormatValue' => $dir . '/classes/Settings/FormatValue.php',
  'AC\\Settings\\General' => $dir . '/classes/Settings/General.php',
  'AC\\Settings\\Header' => $dir . '/classes/Settings/Header.php',
  'AC\\Settings\\Option' => $dir . '/classes/Settings/Option.php',
  'AC\\Settings\\Option\\EditButton' => $dir . '/classes/Settings/Option/EditButton.php',
  'AC\\Storage\\KeyValuePair' => $dir . '/classes/Storage/KeyValuePair.php',
  'AC\\Storage\\ListScreenOrder' => $dir . '/classes/Storage/ListScreenOrder.php',
  'AC\\Storage\\Option' => $dir . '/classes/Storage/Option.php',
  'AC\\Storage\\OptionFactory' => $dir . '/classes/Storage/OptionFactory.php',
  'AC\\Storage\\SiteOption' => $dir . '/classes/Storage/SiteOption.php',
  'AC\\Storage\\Timestamp' => $dir . '/classes/Storage/Timestamp.php',
  'AC\\Storage\\Transaction' => $dir . '/classes/Storage/Transaction.php',
  'AC\\Storage\\UserMeta' => $dir . '/classes/Storage/UserMeta.php',
  'AC\\Table\\Button' => $dir . '/classes/Table/Button.php',
  'AC\\Table\\Preference' => $dir . '/classes/Table/Preference.php',
  'AC\\Table\\Screen' => $dir . '/classes/Table/Screen.php',
  'AC\\Table\\TableFormView' => $dir . '/classes/Table/TableFormView.php',
  'AC\\ThirdParty\\ACF' => $dir . '/classes/ThirdParty/ACF.php',
  'AC\\ThirdParty\\NinjaForms' => $dir . '/classes/ThirdParty/NinjaForms.php',
  'AC\\ThirdParty\\WPML' => $dir . '/classes/ThirdParty/WPML.php',
  'AC\\ThirdParty\\WPMLColumn' => $dir . '/classes/ThirdParty/WPMLColumn.php',
  'AC\\ThirdParty\\WooCommerce' => $dir . '/classes/ThirdParty/WooCommerce.php',
  'AC\\Transient' => $dir . '/classes/Transient.php',
  'AC\\Transient\\User' => $dir . '/classes/Transient/User.php',
  'AC\\Type\\DateRange' => $dir . '/classes/Type/DateRange.php',
  'AC\\Type\\ListScreenId' => $dir . '/classes/Type/ListScreenId.php',
  'AC\\Type\\QueryAware' => $dir . '/classes/Type/QueryAware.php',
  'AC\\Type\\QueryAwareTrait' => $dir . '/classes/Type/QueryAwareTrait.php',
  'AC\\Type\\ToggleOptions' => $dir . '/classes/Type/ToggleOptions.php',
  'AC\\Type\\Url' => $dir . '/classes/Type/Url.php',
  'AC\\Type\\Url\\Documentation' => $dir . '/classes/Type/Url/Documentation.php',
  'AC\\Type\\Url\\Path' => $dir . '/classes/Type/Url/Path.php',
  'AC\\Type\\Url\\Site' => $dir . '/classes/Type/Url/Site.php',
  'AC\\Type\\Url\\UtmTags' => $dir . '/classes/Type/Url/UtmTags.php',
  'AC\\TypedArrayIterator' => $dir . '/classes/TypedArrayIterator.php',
  'AC\\View' => $dir . '/classes/View.php',
  'AC\\WpListTableFactory' => $dir . '/classes/WpListTableFactory.php',
);