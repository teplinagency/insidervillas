<?php

$dir = realpath( __DIR__ . '/..' );

return array (
  'ACP\\API' => $dir . '/classes/API.php',
  'ACP\\API\\Cached' => $dir . '/classes/API/Cached.php',
  'ACP\\API\\Request' => $dir . '/classes/API/Request.php',
  'ACP\\API\\Request\\Activation' => $dir . '/classes/API/Request/Activation.php',
  'ACP\\API\\Request\\Deactivation' => $dir . '/classes/API/Request/Deactivation.php',
  'ACP\\API\\Request\\DownloadInformation' => $dir . '/classes/API/Request/DownloadInformation.php',
  'ACP\\API\\Request\\ProductInformation' => $dir . '/classes/API/Request/ProductInformation.php',
  'ACP\\API\\Request\\ProductsUpdate' => $dir . '/classes/API/Request/ProductsUpdate.php',
  'ACP\\API\\Request\\SubscriptionDetails' => $dir . '/classes/API/Request/SubscriptionDetails.php',
  'ACP\\API\\Response' => $dir . '/classes/API/Response.php',
  'ACP\\AdminColumnsPro' => $dir . '/classes/AdminColumnsPro.php',
  'ACP\\Admin\\Assets' => $dir . '/classes/Admin/Assets.php',
  'ACP\\Admin\\Feedback' => $dir . '/classes/Admin/Feedback.php',
  'ACP\\Admin\\MainFactory' => $dir . '/classes/Admin/MainFactory.php',
  'ACP\\Admin\\Main\\Tools' => $dir . '/classes/Admin/Main/Tools.php',
  'ACP\\Admin\\MenuFactory' => $dir . '/classes/Admin/MenuFactory.php',
  'ACP\\Admin\\NetworkMainFactory' => $dir . '/classes/Admin/NetworkMainFactory.php',
  'ACP\\Admin\\Section\\License' => $dir . '/classes/Admin/Section/License.php',
  'ACP\\Admin\\Section\\LicenseNetworkMessage' => $dir . '/classes/Admin/Section/LicenseNetworkMessage.php',
  'ACP\\Admin\\Settings' => $dir . '/classes/Admin/Settings.php',
  'ACP\\Bookmark\\Addon' => $dir . '/classes/Bookmark/Addon.php',
  'ACP\\Bookmark\\Controller\\RequestSetter' => $dir . '/classes/Bookmark/Controller/RequestSetter.php',
  'ACP\\Bookmark\\Controller\\Segment' => $dir . '/classes/Bookmark/Controller/Segment.php',
  'ACP\\Bookmark\\Entity\\Segment' => $dir . '/classes/Bookmark/Entity/Segment.php',
  'ACP\\Bookmark\\SegmentRepository' => $dir . '/classes/Bookmark/SegmentRepository.php',
  'ACP\\Bookmark\\Setting\\PreferredSegment' => $dir . '/classes/Bookmark/Setting/PreferredSegment.php',
  'ACP\\Bookmark\\Type\\SegmentId' => $dir . '/classes/Bookmark/Type/SegmentId.php',
  'ACP\\Capability\\Capability' => $dir . '/classes/Capability/Capability.php',
  'ACP\\Check\\Activation' => $dir . '/classes/Check/Activation.php',
  'ACP\\Check\\Beta' => $dir . '/classes/Check/Beta.php',
  'ACP\\Check\\Expired' => $dir . '/classes/Check/Expired.php',
  'ACP\\Check\\Renewal' => $dir . '/classes/Check/Renewal.php',
  'ACP\\Column\\Actions' => $dir . '/classes/Column/Actions.php',
  'ACP\\Column\\Comment\\Agent' => $dir . '/classes/Column/Comment/Agent.php',
  'ACP\\Column\\Comment\\Approved' => $dir . '/classes/Column/Comment/Approved.php',
  'ACP\\Column\\Comment\\Author' => $dir . '/classes/Column/Comment/Author.php',
  'ACP\\Column\\Comment\\AuthorAvatar' => $dir . '/classes/Column/Comment/AuthorAvatar.php',
  'ACP\\Column\\Comment\\AuthorEmail' => $dir . '/classes/Column/Comment/AuthorEmail.php',
  'ACP\\Column\\Comment\\AuthorIP' => $dir . '/classes/Column/Comment/AuthorIP.php',
  'ACP\\Column\\Comment\\AuthorName' => $dir . '/classes/Column/Comment/AuthorName.php',
  'ACP\\Column\\Comment\\AuthorUrl' => $dir . '/classes/Column/Comment/AuthorUrl.php',
  'ACP\\Column\\Comment\\Comment' => $dir . '/classes/Column/Comment/Comment.php',
  'ACP\\Column\\Comment\\Date' => $dir . '/classes/Column/Comment/Date.php',
  'ACP\\Column\\Comment\\DateGmt' => $dir . '/classes/Column/Comment/DateGmt.php',
  'ACP\\Column\\Comment\\Excerpt' => $dir . '/classes/Column/Comment/Excerpt.php',
  'ACP\\Column\\Comment\\HasReplies' => $dir . '/classes/Column/Comment/HasReplies.php',
  'ACP\\Column\\Comment\\ID' => $dir . '/classes/Column/Comment/ID.php',
  'ACP\\Column\\Comment\\IsReply' => $dir . '/classes/Column/Comment/IsReply.php',
  'ACP\\Column\\Comment\\Post' => $dir . '/classes/Column/Comment/Post.php',
  'ACP\\Column\\Comment\\PostType' => $dir . '/classes/Column/Comment/PostType.php',
  'ACP\\Column\\Comment\\ReplyTo' => $dir . '/classes/Column/Comment/ReplyTo.php',
  'ACP\\Column\\Comment\\Response' => $dir . '/classes/Column/Comment/Response.php',
  'ACP\\Column\\Comment\\Status' => $dir . '/classes/Column/Comment/Status.php',
  'ACP\\Column\\Comment\\Type' => $dir . '/classes/Column/Comment/Type.php',
  'ACP\\Column\\Comment\\User' => $dir . '/classes/Column/Comment/User.php',
  'ACP\\Column\\Comment\\WordCount' => $dir . '/classes/Column/Comment/WordCount.php',
  'ACP\\Column\\CustomField' => $dir . '/classes/Column/CustomField.php',
  'ACP\\Column\\CustomField\\EditingModelFactory' => $dir . '/classes/Column/CustomField/EditingModelFactory.php',
  'ACP\\Column\\CustomField\\ExportModelFactory' => $dir . '/classes/Column/CustomField/ExportModelFactory.php',
  'ACP\\Column\\CustomField\\FilteringModelFactory' => $dir . '/classes/Column/CustomField/FilteringModelFactory.php',
  'ACP\\Column\\CustomField\\SearchComparisonFactory' => $dir . '/classes/Column/CustomField/SearchComparisonFactory.php',
  'ACP\\Column\\Media\\AlternateText' => $dir . '/classes/Column/Media/AlternateText.php',
  'ACP\\Column\\Media\\Author' => $dir . '/classes/Column/Media/Author.php',
  'ACP\\Column\\Media\\AuthorName' => $dir . '/classes/Column/Media/AuthorName.php',
  'ACP\\Column\\Media\\AvailableSizes' => $dir . '/classes/Column/Media/AvailableSizes.php',
  'ACP\\Column\\Media\\Caption' => $dir . '/classes/Column/Media/Caption.php',
  'ACP\\Column\\Media\\Comments' => $dir . '/classes/Column/Media/Comments.php',
  'ACP\\Column\\Media\\Date' => $dir . '/classes/Column/Media/Date.php',
  'ACP\\Column\\Media\\Description' => $dir . '/classes/Column/Media/Description.php',
  'ACP\\Column\\Media\\Dimensions' => $dir . '/classes/Column/Media/Dimensions.php',
  'ACP\\Column\\Media\\ExifData' => $dir . '/classes/Column/Media/ExifData.php',
  'ACP\\Column\\Media\\FileName' => $dir . '/classes/Column/Media/FileName.php',
  'ACP\\Column\\Media\\FileSize' => $dir . '/classes/Column/Media/FileSize.php',
  'ACP\\Column\\Media\\Height' => $dir . '/classes/Column/Media/Height.php',
  'ACP\\Column\\Media\\ID' => $dir . '/classes/Column/Media/ID.php',
  'ACP\\Column\\Media\\Image' => $dir . '/classes/Column/Media/Image.php',
  'ACP\\Column\\Media\\MediaParent' => $dir . '/classes/Column/Media/MediaParent.php',
  'ACP\\Column\\Media\\Menu' => $dir . '/classes/Column/Media/Menu.php',
  'ACP\\Column\\Media\\MimeType' => $dir . '/classes/Column/Media/MimeType.php',
  'ACP\\Column\\Media\\Permalink' => $dir . '/classes/Column/Media/Permalink.php',
  'ACP\\Column\\Media\\PostType' => $dir . '/classes/Column/Media/PostType.php',
  'ACP\\Column\\Media\\Taxonomy' => $dir . '/classes/Column/Media/Taxonomy.php',
  'ACP\\Column\\Media\\Title' => $dir . '/classes/Column/Media/Title.php',
  'ACP\\Column\\Media\\UsedAsFeaturedImage' => $dir . '/classes/Column/Media/UsedAsFeaturedImage.php',
  'ACP\\Column\\Media\\Width' => $dir . '/classes/Column/Media/Width.php',
  'ACP\\Column\\Menu' => $dir . '/classes/Column/Menu.php',
  'ACP\\Column\\Meta' => $dir . '/classes/Column/Meta.php',
  'ACP\\Column\\NativeTaxonomy' => $dir . '/classes/Column/NativeTaxonomy.php',
  'ACP\\Column\\NetworkSite\\BlogID' => $dir . '/classes/Column/NetworkSite/BlogID.php',
  'ACP\\Column\\NetworkSite\\CommentCount' => $dir . '/classes/Column/NetworkSite/CommentCount.php',
  'ACP\\Column\\NetworkSite\\Domain' => $dir . '/classes/Column/NetworkSite/Domain.php',
  'ACP\\Column\\NetworkSite\\LastUpdated' => $dir . '/classes/Column/NetworkSite/LastUpdated.php',
  'ACP\\Column\\NetworkSite\\Name' => $dir . '/classes/Column/NetworkSite/Name.php',
  'ACP\\Column\\NetworkSite\\Option' => $dir . '/classes/Column/NetworkSite/Option.php',
  'ACP\\Column\\NetworkSite\\Options' => $dir . '/classes/Column/NetworkSite/Options.php',
  'ACP\\Column\\NetworkSite\\Path' => $dir . '/classes/Column/NetworkSite/Path.php',
  'ACP\\Column\\NetworkSite\\Plugins' => $dir . '/classes/Column/NetworkSite/Plugins.php',
  'ACP\\Column\\NetworkSite\\PostCount' => $dir . '/classes/Column/NetworkSite/PostCount.php',
  'ACP\\Column\\NetworkSite\\Property' => $dir . '/classes/Column/NetworkSite/Property.php',
  'ACP\\Column\\NetworkSite\\Registered' => $dir . '/classes/Column/NetworkSite/Registered.php',
  'ACP\\Column\\NetworkSite\\SiteID' => $dir . '/classes/Column/NetworkSite/SiteID.php',
  'ACP\\Column\\NetworkSite\\Status' => $dir . '/classes/Column/NetworkSite/Status.php',
  'ACP\\Column\\NetworkSite\\Theme' => $dir . '/classes/Column/NetworkSite/Theme.php',
  'ACP\\Column\\NetworkSite\\UploadSpace' => $dir . '/classes/Column/NetworkSite/UploadSpace.php',
  'ACP\\Column\\Post\\Ancestors' => $dir . '/classes/Column/Post/Ancestors.php',
  'ACP\\Column\\Post\\Attachment' => $dir . '/classes/Column/Post/Attachment.php',
  'ACP\\Column\\Post\\Author' => $dir . '/classes/Column/Post/Author.php',
  'ACP\\Column\\Post\\AuthorName' => $dir . '/classes/Column/Post/AuthorName.php',
  'ACP\\Column\\Post\\BeforeMoreTag' => $dir . '/classes/Column/Post/BeforeMoreTag.php',
  'ACP\\Column\\Post\\Categories' => $dir . '/classes/Column/Post/Categories.php',
  'ACP\\Column\\Post\\ChildPages' => $dir . '/classes/Column/Post/ChildPages.php',
  'ACP\\Column\\Post\\CommentCount' => $dir . '/classes/Column/Post/CommentCount.php',
  'ACP\\Column\\Post\\CommentStatus' => $dir . '/classes/Column/Post/CommentStatus.php',
  'ACP\\Column\\Post\\Comments' => $dir . '/classes/Column/Post/Comments.php',
  'ACP\\Column\\Post\\Content' => $dir . '/classes/Column/Post/Content.php',
  'ACP\\Column\\Post\\Date' => $dir . '/classes/Column/Post/Date.php',
  'ACP\\Column\\Post\\DatePublished' => $dir . '/classes/Column/Post/DatePublished.php',
  'ACP\\Column\\Post\\Depth' => $dir . '/classes/Column/Post/Depth.php',
  'ACP\\Column\\Post\\EstimateReadingTime' => $dir . '/classes/Column/Post/EstimateReadingTime.php',
  'ACP\\Column\\Post\\Excerpt' => $dir . '/classes/Column/Post/Excerpt.php',
  'ACP\\Column\\Post\\FeaturedImage' => $dir . '/classes/Column/Post/FeaturedImage.php',
  'ACP\\Column\\Post\\Formats' => $dir . '/classes/Column/Post/Formats.php',
  'ACP\\Column\\Post\\GutenbergBlocks' => $dir . '/classes/Column/Post/GutenbergBlocks.php',
  'ACP\\Column\\Post\\ID' => $dir . '/classes/Column/Post/ID.php',
  'ACP\\Column\\Post\\Images' => $dir . '/classes/Column/Post/Images.php',
  'ACP\\Column\\Post\\LastModifiedAuthor' => $dir . '/classes/Column/Post/LastModifiedAuthor.php',
  'ACP\\Column\\Post\\LatestComment' => $dir . '/classes/Column/Post/LatestComment.php',
  'ACP\\Column\\Post\\LinkCount' => $dir . '/classes/Column/Post/LinkCount.php',
  'ACP\\Column\\Post\\Menu' => $dir . '/classes/Column/Post/Menu.php',
  'ACP\\Column\\Post\\Modified' => $dir . '/classes/Column/Post/Modified.php',
  'ACP\\Column\\Post\\Order' => $dir . '/classes/Column/Post/Order.php',
  'ACP\\Column\\Post\\PageTemplate' => $dir . '/classes/Column/Post/PageTemplate.php',
  'ACP\\Column\\Post\\PasswordProtected' => $dir . '/classes/Column/Post/PasswordProtected.php',
  'ACP\\Column\\Post\\Path' => $dir . '/classes/Column/Post/Path.php',
  'ACP\\Column\\Post\\Permalink' => $dir . '/classes/Column/Post/Permalink.php',
  'ACP\\Column\\Post\\PingStatus' => $dir . '/classes/Column/Post/PingStatus.php',
  'ACP\\Column\\Post\\PostParent' => $dir . '/classes/Column/Post/PostParent.php',
  'ACP\\Column\\Post\\PostType' => $dir . '/classes/Column/Post/PostType.php',
  'ACP\\Column\\Post\\PostVisibility' => $dir . '/classes/Column/Post/PostVisibility.php',
  'ACP\\Column\\Post\\Revisions' => $dir . '/classes/Column/Post/Revisions.php',
  'ACP\\Column\\Post\\Shortcode' => $dir . '/classes/Column/Post/Shortcode.php',
  'ACP\\Column\\Post\\Shortcodes' => $dir . '/classes/Column/Post/Shortcodes.php',
  'ACP\\Column\\Post\\Slug' => $dir . '/classes/Column/Post/Slug.php',
  'ACP\\Column\\Post\\Status' => $dir . '/classes/Column/Post/Status.php',
  'ACP\\Column\\Post\\Sticky' => $dir . '/classes/Column/Post/Sticky.php',
  'ACP\\Column\\Post\\Tags' => $dir . '/classes/Column/Post/Tags.php',
  'ACP\\Column\\Post\\Taxonomy' => $dir . '/classes/Column/Post/Taxonomy.php',
  'ACP\\Column\\Post\\Title' => $dir . '/classes/Column/Post/Title.php',
  'ACP\\Column\\Post\\TitleRaw' => $dir . '/classes/Column/Post/TitleRaw.php',
  'ACP\\Column\\Post\\WordCount' => $dir . '/classes/Column/Post/WordCount.php',
  'ACP\\Column\\Taxonomy\\Count' => $dir . '/classes/Column/Taxonomy/Count.php',
  'ACP\\Column\\Taxonomy\\CountForPostType' => $dir . '/classes/Column/Taxonomy/CountForPostType.php',
  'ACP\\Column\\Taxonomy\\Description' => $dir . '/classes/Column/Taxonomy/Description.php',
  'ACP\\Column\\Taxonomy\\Excerpt' => $dir . '/classes/Column/Taxonomy/Excerpt.php',
  'ACP\\Column\\Taxonomy\\ID' => $dir . '/classes/Column/Taxonomy/ID.php',
  'ACP\\Column\\Taxonomy\\Links' => $dir . '/classes/Column/Taxonomy/Links.php',
  'ACP\\Column\\Taxonomy\\Menu' => $dir . '/classes/Column/Taxonomy/Menu.php',
  'ACP\\Column\\Taxonomy\\Name' => $dir . '/classes/Column/Taxonomy/Name.php',
  'ACP\\Column\\Taxonomy\\Posts' => $dir . '/classes/Column/Taxonomy/Posts.php',
  'ACP\\Column\\Taxonomy\\Slug' => $dir . '/classes/Column/Taxonomy/Slug.php',
  'ACP\\Column\\Taxonomy\\TaxonomyParent' => $dir . '/classes/Column/Taxonomy/TaxonomyParent.php',
  'ACP\\Column\\User\\CommentCount' => $dir . '/classes/Column/User/CommentCount.php',
  'ACP\\Column\\User\\Description' => $dir . '/classes/Column/User/Description.php',
  'ACP\\Column\\User\\DisplayName' => $dir . '/classes/Column/User/DisplayName.php',
  'ACP\\Column\\User\\Email' => $dir . '/classes/Column/User/Email.php',
  'ACP\\Column\\User\\FirstName' => $dir . '/classes/Column/User/FirstName.php',
  'ACP\\Column\\User\\FirstPost' => $dir . '/classes/Column/User/FirstPost.php',
  'ACP\\Column\\User\\FullName' => $dir . '/classes/Column/User/FullName.php',
  'ACP\\Column\\User\\Gravatar' => $dir . '/classes/Column/User/Gravatar.php',
  'ACP\\Column\\User\\ID' => $dir . '/classes/Column/User/ID.php',
  'ACP\\Column\\User\\Language' => $dir . '/classes/Column/User/Language.php',
  'ACP\\Column\\User\\LastName' => $dir . '/classes/Column/User/LastName.php',
  'ACP\\Column\\User\\LastPost' => $dir . '/classes/Column/User/LastPost.php',
  'ACP\\Column\\User\\Login' => $dir . '/classes/Column/User/Login.php',
  'ACP\\Column\\User\\Name' => $dir . '/classes/Column/User/Name.php',
  'ACP\\Column\\User\\Nicename' => $dir . '/classes/Column/User/Nicename.php',
  'ACP\\Column\\User\\Nickname' => $dir . '/classes/Column/User/Nickname.php',
  'ACP\\Column\\User\\PostCount' => $dir . '/classes/Column/User/PostCount.php',
  'ACP\\Column\\User\\Posts' => $dir . '/classes/Column/User/Posts.php',
  'ACP\\Column\\User\\Registered' => $dir . '/classes/Column/User/Registered.php',
  'ACP\\Column\\User\\RichEditing' => $dir . '/classes/Column/User/RichEditing.php',
  'ACP\\Column\\User\\Role' => $dir . '/classes/Column/User/Role.php',
  'ACP\\Column\\User\\Roles' => $dir . '/classes/Column/User/Roles.php',
  'ACP\\Column\\User\\ShowToolbar' => $dir . '/classes/Column/User/ShowToolbar.php',
  'ACP\\Column\\User\\Url' => $dir . '/classes/Column/User/Url.php',
  'ACP\\Column\\User\\UserPosts' => $dir . '/classes/Column/User/UserPosts.php',
  'ACP\\Column\\User\\Username' => $dir . '/classes/Column/User/Username.php',
  'ACP\\Controller' => $dir . '/classes/Controller.php',
  'ACP\\Controller\\AjaxRequestFeedback' => $dir . '/classes/Controller/AjaxRequestFeedback.php',
  'ACP\\Controller\\AjaxRequestListScreenOrder' => $dir . '/classes/Controller/AjaxRequestListScreenOrder.php',
  'ACP\\Controller\\AjaxRequestListScreenUsers' => $dir . '/classes/Controller/AjaxRequestListScreenUsers.php',
  'ACP\\Controller\\AjaxRequestSubscriptionUpdate' => $dir . '/classes/Controller/AjaxRequestSubscriptionUpdate.php',
  'ACP\\Controller\\ListScreenCreate' => $dir . '/classes/Controller/ListScreenCreate.php',
  'ACP\\Editing\\Addon' => $dir . '/classes/Editing/Addon.php',
  'ACP\\Editing\\Admin\\CustomFieldEditing' => $dir . '/classes/Editing/Admin/CustomFieldEditing.php',
  'ACP\\Editing\\Admin\\HideOnScreen\\BulkEdit' => $dir . '/classes/Editing/Admin/HideOnScreen/BulkEdit.php',
  'ACP\\Editing\\Admin\\HideOnScreen\\InlineEdit' => $dir . '/classes/Editing/Admin/HideOnScreen/InlineEdit.php',
  'ACP\\Editing\\Ajax\\EditableRows' => $dir . '/classes/Editing/Ajax/EditableRows.php',
  'ACP\\Editing\\Ajax\\EditableRowsFactory' => $dir . '/classes/Editing/Ajax/EditableRowsFactory.php',
  'ACP\\Editing\\Ajax\\EditableRowsFactoryAggregate' => $dir . '/classes/Editing/Ajax/EditableRowsFactoryAggregate.php',
  'ACP\\Editing\\Ajax\\EditableRowsFactoryInterface' => $dir . '/classes/Editing/Ajax/EditableRowsFactoryInterface.php',
  'ACP\\Editing\\Ajax\\EditableRows\\Comment' => $dir . '/classes/Editing/Ajax/EditableRows/Comment.php',
  'ACP\\Editing\\Ajax\\EditableRows\\Post' => $dir . '/classes/Editing/Ajax/EditableRows/Post.php',
  'ACP\\Editing\\Ajax\\EditableRows\\Taxonomy' => $dir . '/classes/Editing/Ajax/EditableRows/Taxonomy.php',
  'ACP\\Editing\\Ajax\\EditableRows\\User' => $dir . '/classes/Editing/Ajax/EditableRows/User.php',
  'ACP\\Editing\\Ajax\\Request' => $dir . '/classes/Editing/Ajax/Request.php',
  'ACP\\Editing\\Ajax\\TableRows' => $dir . '/classes/Editing/Ajax/TableRows.php',
  'ACP\\Editing\\Ajax\\TableRowsFactory' => $dir . '/classes/Editing/Ajax/TableRowsFactory.php',
  'ACP\\Editing\\Ajax\\TableRows\\Comment' => $dir . '/classes/Editing/Ajax/TableRows/Comment.php',
  'ACP\\Editing\\Ajax\\TableRows\\Media' => $dir . '/classes/Editing/Ajax/TableRows/Media.php',
  'ACP\\Editing\\Ajax\\TableRows\\Post' => $dir . '/classes/Editing/Ajax/TableRows/Post.php',
  'ACP\\Editing\\Ajax\\TableRows\\Taxonomy' => $dir . '/classes/Editing/Ajax/TableRows/Taxonomy.php',
  'ACP\\Editing\\Ajax\\TableRows\\User' => $dir . '/classes/Editing/Ajax/TableRows/User.php',
  'ACP\\Editing\\Asset\\Script\\Table' => $dir . '/classes/Editing/Asset/Script/Table.php',
  'ACP\\Editing\\Controller\\Bulk' => $dir . '/classes/Editing/Controller/Bulk.php',
  'ACP\\Editing\\Controller\\Column' => $dir . '/classes/Editing/Controller/Column.php',
  'ACP\\Editing\\Controller\\Single' => $dir . '/classes/Editing/Controller/Single.php',
  'ACP\\Editing\\Editable' => $dir . '/classes/Editing/Editable.php',
  'ACP\\Editing\\EditableDataFactory' => $dir . '/classes/Editing/EditableDataFactory.php',
  'ACP\\Editing\\Helper' => $dir . '/classes/Editing/Helper.php',
  'ACP\\Editing\\HideOnScreen\\BulkEdit' => $dir . '/classes/Editing/HideOnScreen/BulkEdit.php',
  'ACP\\Editing\\HideOnScreen\\InlineEdit' => $dir . '/classes/Editing/HideOnScreen/InlineEdit.php',
  'ACP\\Editing\\ListScreen' => $dir . '/classes/Editing/ListScreen.php',
  'ACP\\Editing\\Model' => $dir . '/classes/Editing/Model.php',
  'ACP\\Editing\\Model\\Comment' => $dir . '/classes/Editing/Model/Comment.php',
  'ACP\\Editing\\Model\\Comment\\Approved' => $dir . '/classes/Editing/Model/Comment/Approved.php',
  'ACP\\Editing\\Model\\Comment\\AuthorEmail' => $dir . '/classes/Editing/Model/Comment/AuthorEmail.php',
  'ACP\\Editing\\Model\\Comment\\AuthorName' => $dir . '/classes/Editing/Model/Comment/AuthorName.php',
  'ACP\\Editing\\Model\\Comment\\AuthorURL' => $dir . '/classes/Editing/Model/Comment/AuthorURL.php',
  'ACP\\Editing\\Model\\Comment\\Comment' => $dir . '/classes/Editing/Model/Comment/Comment.php',
  'ACP\\Editing\\Model\\Comment\\Excerpt' => $dir . '/classes/Editing/Model/Comment/Excerpt.php',
  'ACP\\Editing\\Model\\Comment\\Status' => $dir . '/classes/Editing/Model/Comment/Status.php',
  'ACP\\Editing\\Model\\Comment\\Type' => $dir . '/classes/Editing/Model/Comment/Type.php',
  'ACP\\Editing\\Model\\Comment\\User' => $dir . '/classes/Editing/Model/Comment/User.php',
  'ACP\\Editing\\Model\\CustomField' => $dir . '/classes/Editing/Model/CustomField.php',
  'ACP\\Editing\\Model\\CustomField\\Checkmark' => $dir . '/classes/Editing/Model/CustomField/Checkmark.php',
  'ACP\\Editing\\Model\\CustomField\\Color' => $dir . '/classes/Editing/Model/CustomField/Color.php',
  'ACP\\Editing\\Model\\CustomField\\Date' => $dir . '/classes/Editing/Model/CustomField/Date.php',
  'ACP\\Editing\\Model\\CustomField\\Image' => $dir . '/classes/Editing/Model/CustomField/Image.php',
  'ACP\\Editing\\Model\\CustomField\\Media' => $dir . '/classes/Editing/Model/CustomField/Media.php',
  'ACP\\Editing\\Model\\CustomField\\Number' => $dir . '/classes/Editing/Model/CustomField/Number.php',
  'ACP\\Editing\\Model\\CustomField\\Post' => $dir . '/classes/Editing/Model/CustomField/Post.php',
  'ACP\\Editing\\Model\\CustomField\\Text' => $dir . '/classes/Editing/Model/CustomField/Text.php',
  'ACP\\Editing\\Model\\CustomField\\Textarea' => $dir . '/classes/Editing/Model/CustomField/Textarea.php',
  'ACP\\Editing\\Model\\CustomField\\User' => $dir . '/classes/Editing/Model/CustomField/User.php',
  'ACP\\Editing\\Model\\Disabled' => $dir . '/classes/Editing/Model/Disabled.php',
  'ACP\\Editing\\Model\\Media\\AlternateText' => $dir . '/classes/Editing/Model/Media/AlternateText.php',
  'ACP\\Editing\\Model\\Media\\Caption' => $dir . '/classes/Editing/Model/Media/Caption.php',
  'ACP\\Editing\\Model\\Media\\Date' => $dir . '/classes/Editing/Model/Media/Date.php',
  'ACP\\Editing\\Model\\Media\\MimeType' => $dir . '/classes/Editing/Model/Media/MimeType.php',
  'ACP\\Editing\\Model\\Media\\Title' => $dir . '/classes/Editing/Model/Media/Title.php',
  'ACP\\Editing\\Model\\Menu' => $dir . '/classes/Editing/Model/Menu.php',
  'ACP\\Editing\\Model\\Meta' => $dir . '/classes/Editing/Model/Meta.php',
  'ACP\\Editing\\Model\\Post' => $dir . '/classes/Editing/Model/Post.php',
  'ACP\\Editing\\Model\\Post\\Attachment' => $dir . '/classes/Editing/Model/Post/Attachment.php',
  'ACP\\Editing\\Model\\Post\\Author' => $dir . '/classes/Editing/Model/Post/Author.php',
  'ACP\\Editing\\Model\\Post\\CommentStatus' => $dir . '/classes/Editing/Model/Post/CommentStatus.php',
  'ACP\\Editing\\Model\\Post\\Content' => $dir . '/classes/Editing/Model/Post/Content.php',
  'ACP\\Editing\\Model\\Post\\Date' => $dir . '/classes/Editing/Model/Post/Date.php',
  'ACP\\Editing\\Model\\Post\\Excerpt' => $dir . '/classes/Editing/Model/Post/Excerpt.php',
  'ACP\\Editing\\Model\\Post\\FeaturedImage' => $dir . '/classes/Editing/Model/Post/FeaturedImage.php',
  'ACP\\Editing\\Model\\Post\\Formats' => $dir . '/classes/Editing/Model/Post/Formats.php',
  'ACP\\Editing\\Model\\Post\\Menu' => $dir . '/classes/Editing/Model/Post/Menu.php',
  'ACP\\Editing\\Model\\Post\\Modified' => $dir . '/classes/Editing/Model/Post/Modified.php',
  'ACP\\Editing\\Model\\Post\\Order' => $dir . '/classes/Editing/Model/Post/Order.php',
  'ACP\\Editing\\Model\\Post\\PageTemplate' => $dir . '/classes/Editing/Model/Post/PageTemplate.php',
  'ACP\\Editing\\Model\\Post\\Password' => $dir . '/classes/Editing/Model/Post/Password.php',
  'ACP\\Editing\\Model\\Post\\PingStatus' => $dir . '/classes/Editing/Model/Post/PingStatus.php',
  'ACP\\Editing\\Model\\Post\\PostParent' => $dir . '/classes/Editing/Model/Post/PostParent.php',
  'ACP\\Editing\\Model\\Post\\PostType' => $dir . '/classes/Editing/Model/Post/PostType.php',
  'ACP\\Editing\\Model\\Post\\Slug' => $dir . '/classes/Editing/Model/Post/Slug.php',
  'ACP\\Editing\\Model\\Post\\Status' => $dir . '/classes/Editing/Model/Post/Status.php',
  'ACP\\Editing\\Model\\Post\\Sticky' => $dir . '/classes/Editing/Model/Post/Sticky.php',
  'ACP\\Editing\\Model\\Post\\Taxonomy' => $dir . '/classes/Editing/Model/Post/Taxonomy.php',
  'ACP\\Editing\\Model\\Post\\Title' => $dir . '/classes/Editing/Model/Post/Title.php',
  'ACP\\Editing\\Model\\Post\\TitleRaw' => $dir . '/classes/Editing/Model/Post/TitleRaw.php',
  'ACP\\Editing\\Model\\Site' => $dir . '/classes/Editing/Model/Site.php',
  'ACP\\Editing\\Model\\Site\\Option' => $dir . '/classes/Editing/Model/Site/Option.php',
  'ACP\\Editing\\Model\\Taxonomy' => $dir . '/classes/Editing/Model/Taxonomy.php',
  'ACP\\Editing\\Model\\Taxonomy\\Description' => $dir . '/classes/Editing/Model/Taxonomy/Description.php',
  'ACP\\Editing\\Model\\Taxonomy\\Menu' => $dir . '/classes/Editing/Model/Taxonomy/Menu.php',
  'ACP\\Editing\\Model\\Taxonomy\\Name' => $dir . '/classes/Editing/Model/Taxonomy/Name.php',
  'ACP\\Editing\\Model\\Taxonomy\\Slug' => $dir . '/classes/Editing/Model/Taxonomy/Slug.php',
  'ACP\\Editing\\Model\\Taxonomy\\TaxonomyParent' => $dir . '/classes/Editing/Model/Taxonomy/TaxonomyParent.php',
  'ACP\\Editing\\Model\\User' => $dir . '/classes/Editing/Model/User.php',
  'ACP\\Editing\\Model\\User\\CommentCount' => $dir . '/classes/Editing/Model/User/CommentCount.php',
  'ACP\\Editing\\Model\\User\\Description' => $dir . '/classes/Editing/Model/User/Description.php',
  'ACP\\Editing\\Model\\User\\DisplayName' => $dir . '/classes/Editing/Model/User/DisplayName.php',
  'ACP\\Editing\\Model\\User\\Email' => $dir . '/classes/Editing/Model/User/Email.php',
  'ACP\\Editing\\Model\\User\\Fullname' => $dir . '/classes/Editing/Model/User/Fullname.php',
  'ACP\\Editing\\Model\\User\\Language' => $dir . '/classes/Editing/Model/User/Language.php',
  'ACP\\Editing\\Model\\User\\Nicename' => $dir . '/classes/Editing/Model/User/Nicename.php',
  'ACP\\Editing\\Model\\User\\Registered' => $dir . '/classes/Editing/Model/User/Registered.php',
  'ACP\\Editing\\Model\\User\\RichEditing' => $dir . '/classes/Editing/Model/User/RichEditing.php',
  'ACP\\Editing\\Model\\User\\Role' => $dir . '/classes/Editing/Model/User/Role.php',
  'ACP\\Editing\\Model\\User\\ShowToolbar' => $dir . '/classes/Editing/Model/User/ShowToolbar.php',
  'ACP\\Editing\\Model\\User\\Url' => $dir . '/classes/Editing/Model/User/Url.php',
  'ACP\\Editing\\Model\\User\\Username' => $dir . '/classes/Editing/Model/User/Username.php',
  'ACP\\Editing\\PaginatedOptions' => $dir . '/classes/Editing/PaginatedOptions.php',
  'ACP\\Editing\\Preference\\EditState' => $dir . '/classes/Editing/Preference/EditState.php',
  'ACP\\Editing\\RemoteOptions' => $dir . '/classes/Editing/RemoteOptions.php',
  'ACP\\Editing\\Settings' => $dir . '/classes/Editing/Settings.php',
  'ACP\\Editing\\Settings\\BulkEditing' => $dir . '/classes/Editing/Settings/BulkEditing.php',
  'ACP\\Editing\\Settings\\Content' => $dir . '/classes/Editing/Settings/Content.php',
  'ACP\\Editing\\Settings\\CustomField' => $dir . '/classes/Editing/Settings/CustomField.php',
  'ACP\\Editing\\Settings\\Excerpt' => $dir . '/classes/Editing/Settings/Excerpt.php',
  'ACP\\Editing\\Settings\\Taxonomy' => $dir . '/classes/Editing/Settings/Taxonomy.php',
  'ACP\\Editing\\Strategy' => $dir . '/classes/Editing/Strategy.php',
  'ACP\\Editing\\Strategy\\Comment' => $dir . '/classes/Editing/Strategy/Comment.php',
  'ACP\\Editing\\Strategy\\Post' => $dir . '/classes/Editing/Strategy/Post.php',
  'ACP\\Editing\\Strategy\\Site' => $dir . '/classes/Editing/Strategy/Site.php',
  'ACP\\Editing\\Strategy\\Taxonomy' => $dir . '/classes/Editing/Strategy/Taxonomy.php',
  'ACP\\Editing\\Strategy\\User' => $dir . '/classes/Editing/Strategy/User.php',
  'ACP\\Editing\\TableScreen' => $dir . '/classes/Editing/TableScreen.php',
  'ACP\\Entity\\License' => $dir . '/classes/Entity/License.php',
  'ACP\\Exception\\ControllerException' => $dir . '/classes/Exception/ControllerException.php',
  'ACP\\Exception\\DecoderNotFoundException' => $dir . '/classes/Exception/DecoderNotFoundException.php',
  'ACP\\Exception\\DirectoryNotWritableException' => $dir . '/classes/Exception/DirectoryNotWritableException.php',
  'ACP\\Exception\\FailedToCreateDirectoryException' => $dir . '/classes/Exception/FailedToCreateDirectoryException.php',
  'ACP\\Exception\\FailedToReadDirectoryException' => $dir . '/classes/Exception/FailedToReadDirectoryException.php',
  'ACP\\Exception\\FileNotWritableException' => $dir . '/classes/Exception/FileNotWritableException.php',
  'ACP\\Exception\\UndecodableListScreenException' => $dir . '/classes/Exception/UndecodableListScreenException.php',
  'ACP\\Export\\Addon' => $dir . '/classes/Export/Addon.php',
  'ACP\\Export\\Admin' => $dir . '/classes/Export/Admin.php',
  'ACP\\Export\\Asset\\Script\\Table' => $dir . '/classes/Export/Asset/Script/Table.php',
  'ACP\\Export\\Exportable' => $dir . '/classes/Export/Exportable.php',
  'ACP\\Export\\ExportableColumnFactory' => $dir . '/classes/Export/ExportableColumnFactory.php',
  'ACP\\Export\\Exporter' => $dir . '/classes/Export/Exporter.php',
  'ACP\\Export\\Exporter\\CSV' => $dir . '/classes/Export/Exporter/CSV.php',
  'ACP\\Export\\HideOnScreen\\Export' => $dir . '/classes/Export/HideOnScreen/Export.php',
  'ACP\\Export\\ListScreen' => $dir . '/classes/Export/ListScreen.php',
  'ACP\\Export\\Model' => $dir . '/classes/Export/Model.php',
  'ACP\\Export\\Model\\AttachmentURLFromAttachmentId' => $dir . '/classes/Export/Model/AttachmentURLFromAttachmentId.php',
  'ACP\\Export\\Model\\Comment\\Author' => $dir . '/classes/Export/Model/Comment/Author.php',
  'ACP\\Export\\Model\\Comment\\AuthorAvatar' => $dir . '/classes/Export/Model/Comment/AuthorAvatar.php',
  'ACP\\Export\\Model\\Comment\\Comment' => $dir . '/classes/Export/Model/Comment/Comment.php',
  'ACP\\Export\\Model\\Comment\\Date' => $dir . '/classes/Export/Model/Comment/Date.php',
  'ACP\\Export\\Model\\Comment\\Response' => $dir . '/classes/Export/Model/Comment/Response.php',
  'ACP\\Export\\Model\\CustomField' => $dir . '/classes/Export/Model/CustomField.php',
  'ACP\\Export\\Model\\CustomField\\Date' => $dir . '/classes/Export/Model/CustomField/Date.php',
  'ACP\\Export\\Model\\CustomField\\Image' => $dir . '/classes/Export/Model/CustomField/Image.php',
  'ACP\\Export\\Model\\Disabled' => $dir . '/classes/Export/Model/Disabled.php',
  'ACP\\Export\\Model\\Media\\Title' => $dir . '/classes/Export/Model/Media/Title.php',
  'ACP\\Export\\Model\\PostTitleFromPostId' => $dir . '/classes/Export/Model/PostTitleFromPostId.php',
  'ACP\\Export\\Model\\Post\\Ancestors' => $dir . '/classes/Export/Model/Post/Ancestors.php',
  'ACP\\Export\\Model\\Post\\Attachment' => $dir . '/classes/Export/Model/Post/Attachment.php',
  'ACP\\Export\\Model\\Post\\Author' => $dir . '/classes/Export/Model/Post/Author.php',
  'ACP\\Export\\Model\\Post\\ChildPages' => $dir . '/classes/Export/Model/Post/ChildPages.php',
  'ACP\\Export\\Model\\Post\\CommentCount' => $dir . '/classes/Export/Model/Post/CommentCount.php',
  'ACP\\Export\\Model\\Post\\Comments' => $dir . '/classes/Export/Model/Post/Comments.php',
  'ACP\\Export\\Model\\Post\\Date' => $dir . '/classes/Export/Model/Post/Date.php',
  'ACP\\Export\\Model\\Post\\ImageFileSizes' => $dir . '/classes/Export/Model/Post/ImageFileSizes.php',
  'ACP\\Export\\Model\\Post\\LastModifiedAuthor' => $dir . '/classes/Export/Model/Post/LastModifiedAuthor.php',
  'ACP\\Export\\Model\\Post\\LinkCount' => $dir . '/classes/Export/Model/Post/LinkCount.php',
  'ACP\\Export\\Model\\Post\\Permalink' => $dir . '/classes/Export/Model/Post/Permalink.php',
  'ACP\\Export\\Model\\Post\\PostParent' => $dir . '/classes/Export/Model/Post/PostParent.php',
  'ACP\\Export\\Model\\Post\\Roles' => $dir . '/classes/Export/Model/Post/Roles.php',
  'ACP\\Export\\Model\\Post\\Shortcodes' => $dir . '/classes/Export/Model/Post/Shortcodes.php',
  'ACP\\Export\\Model\\Post\\Taxonomy' => $dir . '/classes/Export/Model/Post/Taxonomy.php',
  'ACP\\Export\\Model\\Post\\Title' => $dir . '/classes/Export/Model/Post/Title.php',
  'ACP\\Export\\Model\\RawValue' => $dir . '/classes/Export/Model/RawValue.php',
  'ACP\\Export\\Model\\StrippedRawValue' => $dir . '/classes/Export/Model/StrippedRawValue.php',
  'ACP\\Export\\Model\\StrippedValue' => $dir . '/classes/Export/Model/StrippedValue.php',
  'ACP\\Export\\Model\\Term\\Description' => $dir . '/classes/Export/Model/Term/Description.php',
  'ACP\\Export\\Model\\Term\\Name' => $dir . '/classes/Export/Model/Term/Name.php',
  'ACP\\Export\\Model\\Term\\Posts' => $dir . '/classes/Export/Model/Term/Posts.php',
  'ACP\\Export\\Model\\Term\\Slug' => $dir . '/classes/Export/Model/Term/Slug.php',
  'ACP\\Export\\Model\\User\\Email' => $dir . '/classes/Export/Model/User/Email.php',
  'ACP\\Export\\Model\\User\\FullName' => $dir . '/classes/Export/Model/User/FullName.php',
  'ACP\\Export\\Model\\User\\Login' => $dir . '/classes/Export/Model/User/Login.php',
  'ACP\\Export\\Model\\User\\Nicename' => $dir . '/classes/Export/Model/User/Nicename.php',
  'ACP\\Export\\Model\\User\\Posts' => $dir . '/classes/Export/Model/User/Posts.php',
  'ACP\\Export\\Model\\User\\Role' => $dir . '/classes/Export/Model/User/Role.php',
  'ACP\\Export\\Model\\Value' => $dir . '/classes/Export/Model/Value.php',
  'ACP\\Export\\Settings' => $dir . '/classes/Export/Settings.php',
  'ACP\\Export\\Settings\\Column' => $dir . '/classes/Export/Settings/Column.php',
  'ACP\\Export\\Strategy' => $dir . '/classes/Export/Strategy.php',
  'ACP\\Export\\Strategy\\Comment' => $dir . '/classes/Export/Strategy/Comment.php',
  'ACP\\Export\\Strategy\\Post' => $dir . '/classes/Export/Strategy/Post.php',
  'ACP\\Export\\Strategy\\Taxonomy' => $dir . '/classes/Export/Strategy/Taxonomy.php',
  'ACP\\Export\\Strategy\\User' => $dir . '/classes/Export/Strategy/User.php',
  'ACP\\Export\\TableScreen' => $dir . '/classes/Export/TableScreen.php',
  'ACP\\Export\\TableScreenOptions' => $dir . '/classes/Export/TableScreenOptions.php',
  'ACP\\Filtering\\Addon' => $dir . '/classes/Filtering/Addon.php',
  'ACP\\Filtering\\Bookmark\\PreferredFilter' => $dir . '/classes/Filtering/Bookmark/PreferredFilter.php',
  'ACP\\Filtering\\Cache' => $dir . '/classes/Filtering/Cache.php',
  'ACP\\Filtering\\Cache\\Model' => $dir . '/classes/Filtering/Cache/Model.php',
  'ACP\\Filtering\\Filterable' => $dir . '/classes/Filtering/Filterable.php',
  'ACP\\Filtering\\Helper' => $dir . '/classes/Filtering/Helper.php',
  'ACP\\Filtering\\ListScreen' => $dir . '/classes/Filtering/ListScreen.php',
  'ACP\\Filtering\\Markup\\Dropdown' => $dir . '/classes/Filtering/Markup/Dropdown.php',
  'ACP\\Filtering\\Markup\\Ranged' => $dir . '/classes/Filtering/Markup/Ranged.php',
  'ACP\\Filtering\\Markup\\Ranged\\Date' => $dir . '/classes/Filtering/Markup/Ranged/Date.php',
  'ACP\\Filtering\\Markup\\Ranged\\Number' => $dir . '/classes/Filtering/Markup/Ranged/Number.php',
  'ACP\\Filtering\\Model' => $dir . '/classes/Filtering/Model.php',
  'ACP\\Filtering\\Model\\Comment\\Agent' => $dir . '/classes/Filtering/Model/Comment/Agent.php',
  'ACP\\Filtering\\Model\\Comment\\Approved' => $dir . '/classes/Filtering/Model/Comment/Approved.php',
  'ACP\\Filtering\\Model\\Comment\\Author' => $dir . '/classes/Filtering/Model/Comment/Author.php',
  'ACP\\Filtering\\Model\\Comment\\AuthorEmail' => $dir . '/classes/Filtering/Model/Comment/AuthorEmail.php',
  'ACP\\Filtering\\Model\\Comment\\AuthorIP' => $dir . '/classes/Filtering/Model/Comment/AuthorIP.php',
  'ACP\\Filtering\\Model\\Comment\\AuthorName' => $dir . '/classes/Filtering/Model/Comment/AuthorName.php',
  'ACP\\Filtering\\Model\\Comment\\AuthorUrl' => $dir . '/classes/Filtering/Model/Comment/AuthorUrl.php',
  'ACP\\Filtering\\Model\\Comment\\Date' => $dir . '/classes/Filtering/Model/Comment/Date.php',
  'ACP\\Filtering\\Model\\Comment\\DateGmt' => $dir . '/classes/Filtering/Model/Comment/DateGmt.php',
  'ACP\\Filtering\\Model\\Comment\\PostType' => $dir . '/classes/Filtering/Model/Comment/PostType.php',
  'ACP\\Filtering\\Model\\Comment\\ReplyTo' => $dir . '/classes/Filtering/Model/Comment/ReplyTo.php',
  'ACP\\Filtering\\Model\\Comment\\Response' => $dir . '/classes/Filtering/Model/Comment/Response.php',
  'ACP\\Filtering\\Model\\Comment\\Type' => $dir . '/classes/Filtering/Model/Comment/Type.php',
  'ACP\\Filtering\\Model\\Comment\\User' => $dir . '/classes/Filtering/Model/Comment/User.php',
  'ACP\\Filtering\\Model\\CustomField' => $dir . '/classes/Filtering/Model/CustomField.php',
  'ACP\\Filtering\\Model\\CustomField\\Checkmark' => $dir . '/classes/Filtering/Model/CustomField/Checkmark.php',
  'ACP\\Filtering\\Model\\CustomField\\Date' => $dir . '/classes/Filtering/Model/CustomField/Date.php',
  'ACP\\Filtering\\Model\\CustomField\\Hascontent' => $dir . '/classes/Filtering/Model/CustomField/Hascontent.php',
  'ACP\\Filtering\\Model\\CustomField\\Image' => $dir . '/classes/Filtering/Model/CustomField/Image.php',
  'ACP\\Filtering\\Model\\CustomField\\Link' => $dir . '/classes/Filtering/Model/CustomField/Link.php',
  'ACP\\Filtering\\Model\\CustomField\\Media' => $dir . '/classes/Filtering/Model/CustomField/Media.php',
  'ACP\\Filtering\\Model\\CustomField\\Number' => $dir . '/classes/Filtering/Model/CustomField/Number.php',
  'ACP\\Filtering\\Model\\CustomField\\Post' => $dir . '/classes/Filtering/Model/CustomField/Post.php',
  'ACP\\Filtering\\Model\\CustomField\\User' => $dir . '/classes/Filtering/Model/CustomField/User.php',
  'ACP\\Filtering\\Model\\Delegated' => $dir . '/classes/Filtering/Model/Delegated.php',
  'ACP\\Filtering\\Model\\Disabled' => $dir . '/classes/Filtering/Model/Disabled.php',
  'ACP\\Filtering\\Model\\Media\\Author' => $dir . '/classes/Filtering/Model/Media/Author.php',
  'ACP\\Filtering\\Model\\Media\\Comments' => $dir . '/classes/Filtering/Model/Media/Comments.php',
  'ACP\\Filtering\\Model\\Media\\MimeType' => $dir . '/classes/Filtering/Model/Media/MimeType.php',
  'ACP\\Filtering\\Model\\Media\\PostType' => $dir . '/classes/Filtering/Model/Media/PostType.php',
  'ACP\\Filtering\\Model\\Media\\UsedAsFeaturedImage' => $dir . '/classes/Filtering/Model/Media/UsedAsFeaturedImage.php',
  'ACP\\Filtering\\Model\\Meta' => $dir . '/classes/Filtering/Model/Meta.php',
  'ACP\\Filtering\\Model\\MetaDate' => $dir . '/classes/Filtering/Model/MetaDate.php',
  'ACP\\Filtering\\Model\\Post\\Ancestors' => $dir . '/classes/Filtering/Model/Post/Ancestors.php',
  'ACP\\Filtering\\Model\\Post\\AuthorName' => $dir . '/classes/Filtering/Model/Post/AuthorName.php',
  'ACP\\Filtering\\Model\\Post\\BeforeMoreTag' => $dir . '/classes/Filtering/Model/Post/BeforeMoreTag.php',
  'ACP\\Filtering\\Model\\Post\\ChildPages' => $dir . '/classes/Filtering/Model/Post/ChildPages.php',
  'ACP\\Filtering\\Model\\Post\\CommentCount' => $dir . '/classes/Filtering/Model/Post/CommentCount.php',
  'ACP\\Filtering\\Model\\Post\\CommentStatus' => $dir . '/classes/Filtering/Model/Post/CommentStatus.php',
  'ACP\\Filtering\\Model\\Post\\Content' => $dir . '/classes/Filtering/Model/Post/Content.php',
  'ACP\\Filtering\\Model\\Post\\Date' => $dir . '/classes/Filtering/Model/Post/Date.php',
  'ACP\\Filtering\\Model\\Post\\Excerpt' => $dir . '/classes/Filtering/Model/Post/Excerpt.php',
  'ACP\\Filtering\\Model\\Post\\FeaturedImage' => $dir . '/classes/Filtering/Model/Post/FeaturedImage.php',
  'ACP\\Filtering\\Model\\Post\\Formats' => $dir . '/classes/Filtering/Model/Post/Formats.php',
  'ACP\\Filtering\\Model\\Post\\ID' => $dir . '/classes/Filtering/Model/Post/ID.php',
  'ACP\\Filtering\\Model\\Post\\LastModifiedAuthor' => $dir . '/classes/Filtering/Model/Post/LastModifiedAuthor.php',
  'ACP\\Filtering\\Model\\Post\\Modified' => $dir . '/classes/Filtering/Model/Post/Modified.php',
  'ACP\\Filtering\\Model\\Post\\PageTemplate' => $dir . '/classes/Filtering/Model/Post/PageTemplate.php',
  'ACP\\Filtering\\Model\\Post\\PingStatus' => $dir . '/classes/Filtering/Model/Post/PingStatus.php',
  'ACP\\Filtering\\Model\\Post\\PostParent' => $dir . '/classes/Filtering/Model/Post/PostParent.php',
  'ACP\\Filtering\\Model\\Post\\Roles' => $dir . '/classes/Filtering/Model/Post/Roles.php',
  'ACP\\Filtering\\Model\\Post\\Status' => $dir . '/classes/Filtering/Model/Post/Status.php',
  'ACP\\Filtering\\Model\\Post\\Sticky' => $dir . '/classes/Filtering/Model/Post/Sticky.php',
  'ACP\\Filtering\\Model\\Post\\Taxonomy' => $dir . '/classes/Filtering/Model/Post/Taxonomy.php',
  'ACP\\Filtering\\Model\\Taxonomy\\ID' => $dir . '/classes/Filtering/Model/Taxonomy/ID.php',
  'ACP\\Filtering\\Model\\Taxonomy\\TaxonomyParent' => $dir . '/classes/Filtering/Model/Taxonomy/TaxonomyParent.php',
  'ACP\\Filtering\\Model\\User\\Email' => $dir . '/classes/Filtering/Model/User/Email.php',
  'ACP\\Filtering\\Model\\User\\Language' => $dir . '/classes/Filtering/Model/User/Language.php',
  'ACP\\Filtering\\Model\\User\\Registered' => $dir . '/classes/Filtering/Model/User/Registered.php',
  'ACP\\Filtering\\Model\\User\\RichEditing' => $dir . '/classes/Filtering/Model/User/RichEditing.php',
  'ACP\\Filtering\\Model\\User\\Role' => $dir . '/classes/Filtering/Model/User/Role.php',
  'ACP\\Filtering\\Model\\User\\ShowToolbar' => $dir . '/classes/Filtering/Model/User/ShowToolbar.php',
  'ACP\\Filtering\\Model\\User\\Url' => $dir . '/classes/Filtering/Model/User/Url.php',
  'ACP\\Filtering\\Model\\User\\Username' => $dir . '/classes/Filtering/Model/User/Username.php',
  'ACP\\Filtering\\Settings' => $dir . '/classes/Filtering/Settings.php',
  'ACP\\Filtering\\Settings\\Date' => $dir . '/classes/Filtering/Settings/Date.php',
  'ACP\\Filtering\\Settings\\DatePast' => $dir . '/classes/Filtering/Settings/DatePast.php',
  'ACP\\Filtering\\Settings\\Delegated' => $dir . '/classes/Filtering/Settings/Delegated.php',
  'ACP\\Filtering\\Settings\\Ranged' => $dir . '/classes/Filtering/Settings/Ranged.php',
  'ACP\\Filtering\\Strategy' => $dir . '/classes/Filtering/Strategy.php',
  'ACP\\Filtering\\Strategy\\Comment' => $dir . '/classes/Filtering/Strategy/Comment.php',
  'ACP\\Filtering\\Strategy\\Post' => $dir . '/classes/Filtering/Strategy/Post.php',
  'ACP\\Filtering\\Strategy\\Taxonomy' => $dir . '/classes/Filtering/Strategy/Taxonomy.php',
  'ACP\\Filtering\\Strategy\\User' => $dir . '/classes/Filtering/Strategy/User.php',
  'ACP\\Filtering\\TableScreen' => $dir . '/classes/Filtering/TableScreen.php',
  'ACP\\Filtering\\TableScreen\\Comment' => $dir . '/classes/Filtering/TableScreen/Comment.php',
  'ACP\\Filtering\\TableScreen\\MSUser' => $dir . '/classes/Filtering/TableScreen/MSUser.php',
  'ACP\\Filtering\\TableScreen\\Post' => $dir . '/classes/Filtering/TableScreen/Post.php',
  'ACP\\Filtering\\TableScreen\\Taxonomy' => $dir . '/classes/Filtering/TableScreen/Taxonomy.php',
  'ACP\\Filtering\\TableScreen\\User' => $dir . '/classes/Filtering/TableScreen/User.php',
  'ACP\\Helper\\FilterButton' => $dir . '/classes/Helper/FilterButton.php',
  'ACP\\Helper\\FilterButtonFactory' => $dir . '/classes/Helper/FilterButtonFactory.php',
  'ACP\\Helper\\FilterButton\\Taxonomy' => $dir . '/classes/Helper/FilterButton/Taxonomy.php',
  'ACP\\Helper\\FilterButton\\Users' => $dir . '/classes/Helper/FilterButton/Users.php',
  'ACP\\Helper\\Select\\Entities' => $dir . '/classes/Helper/Select/Entities.php',
  'ACP\\Helper\\Select\\Entities\\Comment' => $dir . '/classes/Helper/Select/Entities/Comment.php',
  'ACP\\Helper\\Select\\Entities\\MimeType' => $dir . '/classes/Helper/Select/Entities/MimeType.php',
  'ACP\\Helper\\Select\\Entities\\Post' => $dir . '/classes/Helper/Select/Entities/Post.php',
  'ACP\\Helper\\Select\\Entities\\PostStatus' => $dir . '/classes/Helper/Select/Entities/PostStatus.php',
  'ACP\\Helper\\Select\\Entities\\PostType' => $dir . '/classes/Helper/Select/Entities/PostType.php',
  'ACP\\Helper\\Select\\Entities\\Taxonomy' => $dir . '/classes/Helper/Select/Entities/Taxonomy.php',
  'ACP\\Helper\\Select\\Entities\\User' => $dir . '/classes/Helper/Select/Entities/User.php',
  'ACP\\Helper\\Select\\Formatter' => $dir . '/classes/Helper/Select/Formatter.php',
  'ACP\\Helper\\Select\\Formatter\\CommentSummary' => $dir . '/classes/Helper/Select/Formatter/CommentSummary.php',
  'ACP\\Helper\\Select\\Formatter\\PostTitle' => $dir . '/classes/Helper/Select/Formatter/PostTitle.php',
  'ACP\\Helper\\Select\\Formatter\\PostTypeLabel' => $dir . '/classes/Helper/Select/Formatter/PostTypeLabel.php',
  'ACP\\Helper\\Select\\Formatter\\TermName' => $dir . '/classes/Helper/Select/Formatter/TermName.php',
  'ACP\\Helper\\Select\\Formatter\\UserName' => $dir . '/classes/Helper/Select/Formatter/UserName.php',
  'ACP\\Helper\\Select\\Group\\Alphabetically' => $dir . '/classes/Helper/Select/Group/Alphabetically.php',
  'ACP\\Helper\\Select\\Group\\Date' => $dir . '/classes/Helper/Select/Group/Date.php',
  'ACP\\Helper\\Select\\Group\\MimeType' => $dir . '/classes/Helper/Select/Group/MimeType.php',
  'ACP\\Helper\\Select\\Group\\PostType' => $dir . '/classes/Helper/Select/Group/PostType.php',
  'ACP\\Helper\\Select\\Group\\PostTypeType' => $dir . '/classes/Helper/Select/Group/PostTypeType.php',
  'ACP\\Helper\\Select\\Group\\Taxonomy' => $dir . '/classes/Helper/Select/Group/Taxonomy.php',
  'ACP\\Helper\\Select\\Group\\UserRole' => $dir . '/classes/Helper/Select/Group/UserRole.php',
  'ACP\\Helper\\Select\\Option' => $dir . '/classes/Helper/Select/Option.php',
  'ACP\\Helper\\Select\\Options' => $dir . '/classes/Helper/Select/Options.php',
  'ACP\\Helper\\Select\\Options\\Paginated' => $dir . '/classes/Helper/Select/Options/Paginated.php',
  'ACP\\Helper\\Select\\Options\\SinglePage' => $dir . '/classes/Helper/Select/Options/SinglePage.php',
  'ACP\\Helper\\Select\\Paginated' => $dir . '/classes/Helper/Select/Paginated.php',
  'ACP\\Helper\\Select\\Value' => $dir . '/classes/Helper/Select/Value.php',
  'ACP\\Helper\\Select\\Value\\Comment' => $dir . '/classes/Helper/Select/Value/Comment.php',
  'ACP\\Helper\\Select\\Value\\MimeType' => $dir . '/classes/Helper/Select/Value/MimeType.php',
  'ACP\\Helper\\Select\\Value\\Post' => $dir . '/classes/Helper/Select/Value/Post.php',
  'ACP\\Helper\\Select\\Value\\PostStatus' => $dir . '/classes/Helper/Select/Value/PostStatus.php',
  'ACP\\Helper\\Select\\Value\\PostType' => $dir . '/classes/Helper/Select/Value/PostType.php',
  'ACP\\Helper\\Select\\Value\\Taxonomy' => $dir . '/classes/Helper/Select/Value/Taxonomy.php',
  'ACP\\Helper\\Select\\Value\\User' => $dir . '/classes/Helper/Select/Value/User.php',
  'ACP\\IconPicker' => $dir . '/classes/IconPicker.php',
  'ACP\\LicenseKeyRepository' => $dir . '/classes/LicenseKeyRepository.php',
  'ACP\\LicenseRepository' => $dir . '/classes/LicenseRepository.php',
  'ACP\\ListScreenRepository\\Collection' => $dir . '/classes/ListScreenRepository/Collection.php',
  'ACP\\ListScreenRepository\\File' => $dir . '/classes/ListScreenRepository/File.php',
  'ACP\\ListScreenRepository\\FileFactory' => $dir . '/classes/ListScreenRepository/FileFactory.php',
  'ACP\\ListScreen\\Comment' => $dir . '/classes/ListScreen/Comment.php',
  'ACP\\ListScreen\\MSSite' => $dir . '/classes/ListScreen/MSSite.php',
  'ACP\\ListScreen\\MSUser' => $dir . '/classes/ListScreen/MSUser.php',
  'ACP\\ListScreen\\Media' => $dir . '/classes/ListScreen/Media.php',
  'ACP\\ListScreen\\Post' => $dir . '/classes/ListScreen/Post.php',
  'ACP\\ListScreen\\Taxonomy' => $dir . '/classes/ListScreen/Taxonomy.php',
  'ACP\\ListScreen\\User' => $dir . '/classes/ListScreen/User.php',
  'ACP\\ListScreens' => $dir . '/classes/ListScreens.php',
  'ACP\\Localize' => $dir . '/classes/Localize.php',
  'ACP\\Message\\Disabled' => $dir . '/classes/Message/Disabled.php',
  'ACP\\Migrate\\Admin\\Section\\Export' => $dir . '/classes/Migrate/Admin/Section/Export.php',
  'ACP\\Migrate\\Admin\\Section\\Import' => $dir . '/classes/Migrate/Admin/Section/Import.php',
  'ACP\\Migrate\\Admin\\Table\\Export' => $dir . '/classes/Migrate/Admin/Table/Export.php',
  'ACP\\Migrate\\Export\\Request' => $dir . '/classes/Migrate/Export/Request.php',
  'ACP\\Migrate\\Export\\Response' => $dir . '/classes/Migrate/Export/Response.php',
  'ACP\\Migrate\\Export\\ResponseFactory' => $dir . '/classes/Migrate/Export/ResponseFactory.php',
  'ACP\\Migrate\\Export\\Response\\File' => $dir . '/classes/Migrate/Export/Response/File.php',
  'ACP\\Migrate\\Export\\Response\\Screen' => $dir . '/classes/Migrate/Export/Response/Screen.php',
  'ACP\\Migrate\\Import\\Request' => $dir . '/classes/Migrate/Import/Request.php',
  'ACP\\Migrate\\MessageTrait' => $dir . '/classes/Migrate/MessageTrait.php',
  'ACP\\Model' => $dir . '/classes/Model.php',
  'ACP\\NativeTaxonomies' => $dir . '/classes/NativeTaxonomies.php',
  'ACP\\PluginActionLinks' => $dir . '/classes/PluginActionLinks.php',
  'ACP\\Plugin\\Installer' => $dir . '/classes/Plugin/Installer.php',
  'ACP\\Plugin\\NetworkUpdate\\V5000' => $dir . '/classes/Plugin/NetworkUpdate/V5000.php',
  'ACP\\Plugin\\Update\\V4101' => $dir . '/classes/Plugin/Update/V4101.php',
  'ACP\\Plugin\\Update\\V4301' => $dir . '/classes/Plugin/Update/V4301.php',
  'ACP\\Plugin\\Update\\V5000' => $dir . '/classes/Plugin/Update/V5000.php',
  'ACP\\Plugin\\Update\\V5104' => $dir . '/classes/Plugin/Update/V5104.php',
  'ACP\\Plugin\\Update\\V5201' => $dir . '/classes/Plugin/Update/V5201.php',
  'ACP\\Plugin\\Update\\V5300' => $dir . '/classes/Plugin/Update/V5300.php',
  'ACP\\Plugin\\Update\\V5400' => $dir . '/classes/Plugin/Update/V5400.php',
  'ACP\\Plugin\\Updater\\Network' => $dir . '/classes/Plugin/Updater/Network.php',
  'ACP\\Plugins' => $dir . '/classes/Plugins.php',
  'ACP\\QuickAdd\\Addon' => $dir . '/classes/QuickAdd/Addon.php',
  'ACP\\QuickAdd\\Admin\\HideOnScreen\\QuickAdd' => $dir . '/classes/QuickAdd/Admin/HideOnScreen/QuickAdd.php',
  'ACP\\QuickAdd\\Admin\\Settings' => $dir . '/classes/QuickAdd/Admin/Settings.php',
  'ACP\\QuickAdd\\Controller\\AjaxNewItem' => $dir . '/classes/QuickAdd/Controller/AjaxNewItem.php',
  'ACP\\QuickAdd\\Controller\\AjaxScreenOption' => $dir . '/classes/QuickAdd/Controller/AjaxScreenOption.php',
  'ACP\\QuickAdd\\Controller\\JsonResponse' => $dir . '/classes/QuickAdd/Controller/JsonResponse.php',
  'ACP\\QuickAdd\\Filter' => $dir . '/classes/QuickAdd/Filter.php',
  'ACP\\QuickAdd\\Model\\Create' => $dir . '/classes/QuickAdd/Model/Create.php',
  'ACP\\QuickAdd\\Model\\Create\\Post' => $dir . '/classes/QuickAdd/Model/Create/Post.php',
  'ACP\\QuickAdd\\Model\\Factory' => $dir . '/classes/QuickAdd/Model/Factory.php',
  'ACP\\QuickAdd\\Table\\Checkbox\\ShowButton' => $dir . '/classes/QuickAdd/Table/Checkbox/ShowButton.php',
  'ACP\\QuickAdd\\Table\\Loader' => $dir . '/classes/QuickAdd/Table/Loader.php',
  'ACP\\QuickAdd\\Table\\Preference\\ShowButton' => $dir . '/classes/QuickAdd/Table/Preference/ShowButton.php',
  'ACP\\QuickAdd\\Table\\Script\\AddNewInline' => $dir . '/classes/QuickAdd/Table/Script/AddNewInline.php',
  'ACP\\RequestDispatcher' => $dir . '/classes/RequestDispatcher.php',
  'ACP\\RequestHandler\\LicenseActivate' => $dir . '/classes/RequestHandler/LicenseActivate.php',
  'ACP\\RequestHandler\\LicenseDeactivate' => $dir . '/classes/RequestHandler/LicenseDeactivate.php',
  'ACP\\RequestHandler\\LicenseUpdate' => $dir . '/classes/RequestHandler/LicenseUpdate.php',
  'ACP\\RequestHandler\\ProductsUpdate' => $dir . '/classes/RequestHandler/ProductsUpdate.php',
  'ACP\\RequestHandler\\SubscriptionDetails' => $dir . '/classes/RequestHandler/SubscriptionDetails.php',
  'ACP\\RequestParser' => $dir . '/classes/RequestParser.php',
  'ACP\\Search\\Addon' => $dir . '/classes/Search/Addon.php',
  'ACP\\Search\\Asset\\Script\\Table' => $dir . '/classes/Search/Asset/Script/Table.php',
  'ACP\\Search\\Comparison' => $dir . '/classes/Search/Comparison.php',
  'ACP\\Search\\Comparison\\Comment\\Agent' => $dir . '/classes/Search/Comparison/Comment/Agent.php',
  'ACP\\Search\\Comparison\\Comment\\Approved' => $dir . '/classes/Search/Comparison/Comment/Approved.php',
  'ACP\\Search\\Comparison\\Comment\\Author' => $dir . '/classes/Search/Comparison/Comment/Author.php',
  'ACP\\Search\\Comparison\\Comment\\Content' => $dir . '/classes/Search/Comparison/Comment/Content.php',
  'ACP\\Search\\Comparison\\Comment\\Date' => $dir . '/classes/Search/Comparison/Comment/Date.php',
  'ACP\\Search\\Comparison\\Comment\\Date\\Date' => $dir . '/classes/Search/Comparison/Comment/Date/Date.php',
  'ACP\\Search\\Comparison\\Comment\\Date\\Gmt' => $dir . '/classes/Search/Comparison/Comment/Date/Gmt.php',
  'ACP\\Search\\Comparison\\Comment\\Email' => $dir . '/classes/Search/Comparison/Comment/Email.php',
  'ACP\\Search\\Comparison\\Comment\\Field' => $dir . '/classes/Search/Comparison/Comment/Field.php',
  'ACP\\Search\\Comparison\\Comment\\HasReplies' => $dir . '/classes/Search/Comparison/Comment/HasReplies.php',
  'ACP\\Search\\Comparison\\Comment\\ID' => $dir . '/classes/Search/Comparison/Comment/ID.php',
  'ACP\\Search\\Comparison\\Comment\\IP' => $dir . '/classes/Search/Comparison/Comment/IP.php',
  'ACP\\Search\\Comparison\\Comment\\IsReply' => $dir . '/classes/Search/Comparison/Comment/IsReply.php',
  'ACP\\Search\\Comparison\\Comment\\Post' => $dir . '/classes/Search/Comparison/Comment/Post.php',
  'ACP\\Search\\Comparison\\Comment\\PostType' => $dir . '/classes/Search/Comparison/Comment/PostType.php',
  'ACP\\Search\\Comparison\\Comment\\ReplyTo' => $dir . '/classes/Search/Comparison/Comment/ReplyTo.php',
  'ACP\\Search\\Comparison\\Comment\\Type' => $dir . '/classes/Search/Comparison/Comment/Type.php',
  'ACP\\Search\\Comparison\\Comment\\Url' => $dir . '/classes/Search/Comparison/Comment/Url.php',
  'ACP\\Search\\Comparison\\Comment\\User' => $dir . '/classes/Search/Comparison/Comment/User.php',
  'ACP\\Search\\Comparison\\Date' => $dir . '/classes/Search/Comparison/Date.php',
  'ACP\\Search\\Comparison\\FilterOptions' => $dir . '/classes/Search/Comparison/FilterOptions.php',
  'ACP\\Search\\Comparison\\Media\\MimeType' => $dir . '/classes/Search/Comparison/Media/MimeType.php',
  'ACP\\Search\\Comparison\\Media\\PostType' => $dir . '/classes/Search/Comparison/Media/PostType.php',
  'ACP\\Search\\Comparison\\Media\\UsedAsFeaturedImage' => $dir . '/classes/Search/Comparison/Media/UsedAsFeaturedImage.php',
  'ACP\\Search\\Comparison\\Meta' => $dir . '/classes/Search/Comparison/Meta.php',
  'ACP\\Search\\Comparison\\Meta\\Checkmark' => $dir . '/classes/Search/Comparison/Meta/Checkmark.php',
  'ACP\\Search\\Comparison\\Meta\\DateFactory' => $dir . '/classes/Search/Comparison/Meta/DateFactory.php',
  'ACP\\Search\\Comparison\\Meta\\DateTime\\ISO' => $dir . '/classes/Search/Comparison/Meta/DateTime/ISO.php',
  'ACP\\Search\\Comparison\\Meta\\DateTime\\Timestamp' => $dir . '/classes/Search/Comparison/Meta/DateTime/Timestamp.php',
  'ACP\\Search\\Comparison\\Meta\\Decimal' => $dir . '/classes/Search/Comparison/Meta/Decimal.php',
  'ACP\\Search\\Comparison\\Meta\\EmptyNotEmpty' => $dir . '/classes/Search/Comparison/Meta/EmptyNotEmpty.php',
  'ACP\\Search\\Comparison\\Meta\\Image' => $dir . '/classes/Search/Comparison/Meta/Image.php',
  'ACP\\Search\\Comparison\\Meta\\Media' => $dir . '/classes/Search/Comparison/Meta/Media.php',
  'ACP\\Search\\Comparison\\Meta\\Number' => $dir . '/classes/Search/Comparison/Meta/Number.php',
  'ACP\\Search\\Comparison\\Meta\\Post' => $dir . '/classes/Search/Comparison/Meta/Post.php',
  'ACP\\Search\\Comparison\\Meta\\Posts' => $dir . '/classes/Search/Comparison/Meta/Posts.php',
  'ACP\\Search\\Comparison\\Meta\\Serialized' => $dir . '/classes/Search/Comparison/Meta/Serialized.php',
  'ACP\\Search\\Comparison\\Meta\\Text' => $dir . '/classes/Search/Comparison/Meta/Text.php',
  'ACP\\Search\\Comparison\\Meta\\User' => $dir . '/classes/Search/Comparison/Meta/User.php',
  'ACP\\Search\\Comparison\\Post\\Ancestors' => $dir . '/classes/Search/Comparison/Post/Ancestors.php',
  'ACP\\Search\\Comparison\\Post\\Author' => $dir . '/classes/Search/Comparison/Post/Author.php',
  'ACP\\Search\\Comparison\\Post\\BeforeMoreTag' => $dir . '/classes/Search/Comparison/Post/BeforeMoreTag.php',
  'ACP\\Search\\Comparison\\Post\\ChildPages' => $dir . '/classes/Search/Comparison/Post/ChildPages.php',
  'ACP\\Search\\Comparison\\Post\\CommentCount' => $dir . '/classes/Search/Comparison/Post/CommentCount.php',
  'ACP\\Search\\Comparison\\Post\\CommentStatus' => $dir . '/classes/Search/Comparison/Post/CommentStatus.php',
  'ACP\\Search\\Comparison\\Post\\Content' => $dir . '/classes/Search/Comparison/Post/Content.php',
  'ACP\\Search\\Comparison\\Post\\Date' => $dir . '/classes/Search/Comparison/Post/Date.php',
  'ACP\\Search\\Comparison\\Post\\Date\\PostDate' => $dir . '/classes/Search/Comparison/Post/Date/PostDate.php',
  'ACP\\Search\\Comparison\\Post\\Date\\PostModified' => $dir . '/classes/Search/Comparison/Post/Date/PostModified.php',
  'ACP\\Search\\Comparison\\Post\\Excerpt' => $dir . '/classes/Search/Comparison/Post/Excerpt.php',
  'ACP\\Search\\Comparison\\Post\\FeaturedImage' => $dir . '/classes/Search/Comparison/Post/FeaturedImage.php',
  'ACP\\Search\\Comparison\\Post\\Formats' => $dir . '/classes/Search/Comparison/Post/Formats.php',
  'ACP\\Search\\Comparison\\Post\\ID' => $dir . '/classes/Search/Comparison/Post/ID.php',
  'ACP\\Search\\Comparison\\Post\\LastModifiedAuthor' => $dir . '/classes/Search/Comparison/Post/LastModifiedAuthor.php',
  'ACP\\Search\\Comparison\\Post\\Order' => $dir . '/classes/Search/Comparison/Post/Order.php',
  'ACP\\Search\\Comparison\\Post\\PageTemplate' => $dir . '/classes/Search/Comparison/Post/PageTemplate.php',
  'ACP\\Search\\Comparison\\Post\\PasswordProtected' => $dir . '/classes/Search/Comparison/Post/PasswordProtected.php',
  'ACP\\Search\\Comparison\\Post\\PingStatus' => $dir . '/classes/Search/Comparison/Post/PingStatus.php',
  'ACP\\Search\\Comparison\\Post\\PostField' => $dir . '/classes/Search/Comparison/Post/PostField.php',
  'ACP\\Search\\Comparison\\Post\\PostName' => $dir . '/classes/Search/Comparison/Post/PostName.php',
  'ACP\\Search\\Comparison\\Post\\PostParent' => $dir . '/classes/Search/Comparison/Post/PostParent.php',
  'ACP\\Search\\Comparison\\Post\\PostVisibility' => $dir . '/classes/Search/Comparison/Post/PostVisibility.php',
  'ACP\\Search\\Comparison\\Post\\Status' => $dir . '/classes/Search/Comparison/Post/Status.php',
  'ACP\\Search\\Comparison\\Post\\Sticky' => $dir . '/classes/Search/Comparison/Post/Sticky.php',
  'ACP\\Search\\Comparison\\Post\\Taxonomy' => $dir . '/classes/Search/Comparison/Post/Taxonomy.php',
  'ACP\\Search\\Comparison\\Post\\Title' => $dir . '/classes/Search/Comparison/Post/Title.php',
  'ACP\\Search\\Comparison\\RemoteValues' => $dir . '/classes/Search/Comparison/RemoteValues.php',
  'ACP\\Search\\Comparison\\SearchableValues' => $dir . '/classes/Search/Comparison/SearchableValues.php',
  'ACP\\Search\\Comparison\\User\\Date' => $dir . '/classes/Search/Comparison/User/Date.php',
  'ACP\\Search\\Comparison\\User\\Date\\Registered' => $dir . '/classes/Search/Comparison/User/Date/Registered.php',
  'ACP\\Search\\Comparison\\User\\Email' => $dir . '/classes/Search/Comparison/User/Email.php',
  'ACP\\Search\\Comparison\\User\\ID' => $dir . '/classes/Search/Comparison/User/ID.php',
  'ACP\\Search\\Comparison\\User\\Languages' => $dir . '/classes/Search/Comparison/User/Languages.php',
  'ACP\\Search\\Comparison\\User\\MaxPostDate' => $dir . '/classes/Search/Comparison/User/MaxPostDate.php',
  'ACP\\Search\\Comparison\\User\\Name' => $dir . '/classes/Search/Comparison/User/Name.php',
  'ACP\\Search\\Comparison\\User\\Nicename' => $dir . '/classes/Search/Comparison/User/Nicename.php',
  'ACP\\Search\\Comparison\\User\\Role' => $dir . '/classes/Search/Comparison/User/Role.php',
  'ACP\\Search\\Comparison\\User\\TrueFalse' => $dir . '/classes/Search/Comparison/User/TrueFalse.php',
  'ACP\\Search\\Comparison\\User\\Url' => $dir . '/classes/Search/Comparison/User/Url.php',
  'ACP\\Search\\Comparison\\User\\UserField' => $dir . '/classes/Search/Comparison/User/UserField.php',
  'ACP\\Search\\Comparison\\User\\UserName' => $dir . '/classes/Search/Comparison/User/UserName.php',
  'ACP\\Search\\Comparison\\Values' => $dir . '/classes/Search/Comparison/Values.php',
  'ACP\\Search\\Filter' => $dir . '/classes/Search/Filter.php',
  'ACP\\Search\\Helper\\DateValueFactory' => $dir . '/classes/Search/Helper/DateValueFactory.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison' => $dir . '/classes/Search/Helper/MetaQuery/Comparison.php',
  'ACP\\Search\\Helper\\MetaQuery\\ComparisonFactory' => $dir . '/classes/Search/Helper/MetaQuery/ComparisonFactory.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\BeginsWith' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/BeginsWith.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\EndsWith' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/EndsWith.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\Future' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/Future.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\GtDaysAgo' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/GtDaysAgo.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\IsEmpty' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/IsEmpty.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\LtDaysAgo' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/LtDaysAgo.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\NotEmpty' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/NotEmpty.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\Past' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/Past.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\Today' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/Today.php',
  'ACP\\Search\\Helper\\MetaQuery\\Comparison\\WithinDays' => $dir . '/classes/Search/Helper/MetaQuery/Comparison/WithinDays.php',
  'ACP\\Search\\Helper\\MetaQuery\\Date' => $dir . '/classes/Search/Helper/MetaQuery/Date.php',
  'ACP\\Search\\Helper\\MetaQuery\\SerializedComparisonFactory' => $dir . '/classes/Search/Helper/MetaQuery/SerializedComparisonFactory.php',
  'ACP\\Search\\Helper\\Sql\\Comparison' => $dir . '/classes/Search/Helper/Sql/Comparison.php',
  'ACP\\Search\\Helper\\Sql\\ComparisonFactory' => $dir . '/classes/Search/Helper/Sql/ComparisonFactory.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\BeginsWith' => $dir . '/classes/Search/Helper/Sql/Comparison/BeginsWith.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\Between' => $dir . '/classes/Search/Helper/Sql/Comparison/Between.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\Contains' => $dir . '/classes/Search/Helper/Sql/Comparison/Contains.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\EndsWith' => $dir . '/classes/Search/Helper/Sql/Comparison/EndsWith.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\Future' => $dir . '/classes/Search/Helper/Sql/Comparison/Future.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\GtDaysAgo' => $dir . '/classes/Search/Helper/Sql/Comparison/GtDaysAgo.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\In' => $dir . '/classes/Search/Helper/Sql/Comparison/In.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\Like' => $dir . '/classes/Search/Helper/Sql/Comparison/Like.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\LtDaysAgo' => $dir . '/classes/Search/Helper/Sql/Comparison/LtDaysAgo.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\Negatable' => $dir . '/classes/Search/Helper/Sql/Comparison/Negatable.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\NotContains' => $dir . '/classes/Search/Helper/Sql/Comparison/NotContains.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\NotIn' => $dir . '/classes/Search/Helper/Sql/Comparison/NotIn.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\NotLike' => $dir . '/classes/Search/Helper/Sql/Comparison/NotLike.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\Past' => $dir . '/classes/Search/Helper/Sql/Comparison/Past.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\Today' => $dir . '/classes/Search/Helper/Sql/Comparison/Today.php',
  'ACP\\Search\\Helper\\Sql\\Comparison\\WithinDays' => $dir . '/classes/Search/Helper/Sql/Comparison/WithinDays.php',
  'ACP\\Search\\Helper\\Sql\\Statement' => $dir . '/classes/Search/Helper/Sql/Statement.php',
  'ACP\\Search\\Helper\\TaxQuery\\Comparison' => $dir . '/classes/Search/Helper/TaxQuery/Comparison.php',
  'ACP\\Search\\Helper\\TaxQuery\\ComparisonFactory' => $dir . '/classes/Search/Helper/TaxQuery/ComparisonFactory.php',
  'ACP\\Search\\Labels' => $dir . '/classes/Search/Labels.php',
  'ACP\\Search\\Labels\\Date' => $dir . '/classes/Search/Labels/Date.php',
  'ACP\\Search\\Middleware\\Filter' => $dir . '/classes/Search/Middleware/Filter.php',
  'ACP\\Search\\Middleware\\Mapping' => $dir . '/classes/Search/Middleware/Mapping.php',
  'ACP\\Search\\Middleware\\Mapping\\Operator' => $dir . '/classes/Search/Middleware/Mapping/Operator.php',
  'ACP\\Search\\Middleware\\Mapping\\Rule' => $dir . '/classes/Search/Middleware/Mapping/Rule.php',
  'ACP\\Search\\Middleware\\Mapping\\ValueType' => $dir . '/classes/Search/Middleware/Mapping/ValueType.php',
  'ACP\\Search\\Middleware\\Request' => $dir . '/classes/Search/Middleware/Request.php',
  'ACP\\Search\\Middleware\\Rules' => $dir . '/classes/Search/Middleware/Rules.php',
  'ACP\\Search\\Middleware\\Segment' => $dir . '/classes/Search/Middleware/Segment.php',
  'ACP\\Search\\Operators' => $dir . '/classes/Search/Operators.php',
  'ACP\\Search\\Preferences\\SmartFiltering' => $dir . '/classes/Search/Preferences/SmartFiltering.php',
  'ACP\\Search\\Query' => $dir . '/classes/Search/Query.php',
  'ACP\\Search\\QueryFactory' => $dir . '/classes/Search/QueryFactory.php',
  'ACP\\Search\\Query\\Bindings' => $dir . '/classes/Search/Query/Bindings.php',
  'ACP\\Search\\Query\\Bindings\\Comment' => $dir . '/classes/Search/Query/Bindings/Comment.php',
  'ACP\\Search\\Query\\Bindings\\Media' => $dir . '/classes/Search/Query/Bindings/Media.php',
  'ACP\\Search\\Query\\Bindings\\Post' => $dir . '/classes/Search/Query/Bindings/Post.php',
  'ACP\\Search\\Query\\Comment' => $dir . '/classes/Search/Query/Comment.php',
  'ACP\\Search\\Query\\Post' => $dir . '/classes/Search/Query/Post.php',
  'ACP\\Search\\Query\\Term' => $dir . '/classes/Search/Query/Term.php',
  'ACP\\Search\\Query\\User' => $dir . '/classes/Search/Query/User.php',
  'ACP\\Search\\RequestHandler\\Comparison' => $dir . '/classes/Search/RequestHandler/Comparison.php',
  'ACP\\Search\\RequestHandler\\Rules' => $dir . '/classes/Search/RequestHandler/Rules.php',
  'ACP\\Search\\Rule' => $dir . '/classes/Search/Rule.php',
  'ACP\\Search\\Rules' => $dir . '/classes/Search/Rules.php',
  'ACP\\Search\\Searchable' => $dir . '/classes/Search/Searchable.php',
  'ACP\\Search\\Settings' => $dir . '/classes/Search/Settings.php',
  'ACP\\Search\\Settings\\Column' => $dir . '/classes/Search/Settings/Column.php',
  'ACP\\Search\\Settings\\HideOnScreen\\SavedFilters' => $dir . '/classes/Search/Settings/HideOnScreen/SavedFilters.php',
  'ACP\\Search\\Settings\\HideOnScreen\\SmartFilters' => $dir . '/classes/Search/Settings/HideOnScreen/SmartFilters.php',
  'ACP\\Search\\TableScreen' => $dir . '/classes/Search/TableScreen.php',
  'ACP\\Search\\TableScreenFactory' => $dir . '/classes/Search/TableScreenFactory.php',
  'ACP\\Search\\TableScreenOptions' => $dir . '/classes/Search/TableScreenOptions.php',
  'ACP\\Search\\TableScreen\\Comment' => $dir . '/classes/Search/TableScreen/Comment.php',
  'ACP\\Search\\TableScreen\\MSUser' => $dir . '/classes/Search/TableScreen/MSUser.php',
  'ACP\\Search\\TableScreen\\Post' => $dir . '/classes/Search/TableScreen/Post.php',
  'ACP\\Search\\TableScreen\\Taxonomy' => $dir . '/classes/Search/TableScreen/Taxonomy.php',
  'ACP\\Search\\TableScreen\\User' => $dir . '/classes/Search/TableScreen/User.php',
  'ACP\\Search\\Value' => $dir . '/classes/Search/Value.php',
  'ACP\\Service\\Storage' => $dir . '/classes/Service/Storage.php',
  'ACP\\Settings\\Column\\CustomField' => $dir . '/classes/Settings/Column/CustomField.php',
  'ACP\\Settings\\Column\\CustomFieldType' => $dir . '/classes/Settings/Column/CustomFieldType.php',
  'ACP\\Settings\\Column\\FeaturedImage' => $dir . '/classes/Settings/Column/FeaturedImage.php',
  'ACP\\Settings\\Column\\FeaturedImageDisplay' => $dir . '/classes/Settings/Column/FeaturedImageDisplay.php',
  'ACP\\Settings\\Column\\Gravatar' => $dir . '/classes/Settings/Column/Gravatar.php',
  'ACP\\Settings\\Column\\Gutenberg' => $dir . '/classes/Settings/Column/Gutenberg.php',
  'ACP\\Settings\\Column\\Label' => $dir . '/classes/Settings/Column/Label.php',
  'ACP\\Settings\\Column\\NetworkSite\\CommentCount' => $dir . '/classes/Settings/Column/NetworkSite/CommentCount.php',
  'ACP\\Settings\\Column\\NetworkSite\\Options' => $dir . '/classes/Settings/Column/NetworkSite/Options.php',
  'ACP\\Settings\\Column\\NetworkSite\\Plugins' => $dir . '/classes/Settings/Column/NetworkSite/Plugins.php',
  'ACP\\Settings\\Column\\NetworkSite\\PluginsInclude' => $dir . '/classes/Settings/Column/NetworkSite/PluginsInclude.php',
  'ACP\\Settings\\Column\\NetworkSite\\PostCount' => $dir . '/classes/Settings/Column/NetworkSite/PostCount.php',
  'ACP\\Settings\\Column\\NetworkSite\\Theme' => $dir . '/classes/Settings/Column/NetworkSite/Theme.php',
  'ACP\\Settings\\Column\\Shortcodes' => $dir . '/classes/Settings/Column/Shortcodes.php',
  'ACP\\Settings\\Column\\TaxonomyPostType' => $dir . '/classes/Settings/Column/TaxonomyPostType.php',
  'ACP\\Settings\\Column\\User' => $dir . '/classes/Settings/Column/User.php',
  'ACP\\Settings\\Column\\UserCustomField' => $dir . '/classes/Settings/Column/UserCustomField.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen' => $dir . '/classes/Settings/ListScreen/HideOnScreen.php',
  'ACP\\Settings\\ListScreen\\HideOnScreenCollection' => $dir . '/classes/Settings/ListScreen/HideOnScreenCollection.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\BulkActions' => $dir . '/classes/Settings/ListScreen/HideOnScreen/BulkActions.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\FilterCategory' => $dir . '/classes/Settings/ListScreen/HideOnScreen/FilterCategory.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\FilterMediaItem' => $dir . '/classes/Settings/ListScreen/HideOnScreen/FilterMediaItem.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\FilterPostDate' => $dir . '/classes/Settings/ListScreen/HideOnScreen/FilterPostDate.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\FilterPostFormat' => $dir . '/classes/Settings/ListScreen/HideOnScreen/FilterPostFormat.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\Filters' => $dir . '/classes/Settings/ListScreen/HideOnScreen/Filters.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\Search' => $dir . '/classes/Settings/ListScreen/HideOnScreen/Search.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\SubMenu' => $dir . '/classes/Settings/ListScreen/HideOnScreen/SubMenu.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\SubMenu\\CommentStatus' => $dir . '/classes/Settings/ListScreen/HideOnScreen/SubMenu/CommentStatus.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\SubMenu\\PostStatus' => $dir . '/classes/Settings/ListScreen/HideOnScreen/SubMenu/PostStatus.php',
  'ACP\\Settings\\ListScreen\\HideOnScreen\\SubMenu\\Roles' => $dir . '/classes/Settings/ListScreen/HideOnScreen/SubMenu/Roles.php',
  'ACP\\Sorting\\AbstractModel' => $dir . '/classes/Sorting/AbstractModel.php',
  'ACP\\Sorting\\Addon' => $dir . '/classes/Sorting/Addon.php',
  'ACP\\Sorting\\Admin\\Section\\ResetSorting' => $dir . '/classes/Sorting/Admin/Section/ResetSorting.php',
  'ACP\\Sorting\\Admin\\ShowAllResults' => $dir . '/classes/Sorting/Admin/ShowAllResults.php',
  'ACP\\Sorting\\ApplyFilter\\DefaultSort' => $dir . '/classes/Sorting/ApplyFilter/DefaultSort.php',
  'ACP\\Sorting\\Controller\\AjaxResetSorting' => $dir . '/classes/Sorting/Controller/AjaxResetSorting.php',
  'ACP\\Sorting\\Controller\\ManageSortHandler' => $dir . '/classes/Sorting/Controller/ManageSortHandler.php',
  'ACP\\Sorting\\Controller\\RequestSetterHandler' => $dir . '/classes/Sorting/Controller/RequestSetterHandler.php',
  'ACP\\Sorting\\Controller\\ResetSorting' => $dir . '/classes/Sorting/Controller/ResetSorting.php',
  'ACP\\Sorting\\FormatValue' => $dir . '/classes/Sorting/FormatValue.php',
  'ACP\\Sorting\\FormatValue\\AvailableSizes' => $dir . '/classes/Sorting/FormatValue/AvailableSizes.php',
  'ACP\\Sorting\\FormatValue\\ContentTotalImageSize' => $dir . '/classes/Sorting/FormatValue/ContentTotalImageSize.php',
  'ACP\\Sorting\\FormatValue\\Date' => $dir . '/classes/Sorting/FormatValue/Date.php',
  'ACP\\Sorting\\FormatValue\\Dimensions' => $dir . '/classes/Sorting/FormatValue/Dimensions.php',
  'ACP\\Sorting\\FormatValue\\Exif' => $dir . '/classes/Sorting/FormatValue/Exif.php',
  'ACP\\Sorting\\FormatValue\\FileName' => $dir . '/classes/Sorting/FormatValue/FileName.php',
  'ACP\\Sorting\\FormatValue\\FileSize' => $dir . '/classes/Sorting/FormatValue/FileSize.php',
  'ACP\\Sorting\\FormatValue\\Height' => $dir . '/classes/Sorting/FormatValue/Height.php',
  'ACP\\Sorting\\FormatValue\\PostTitle' => $dir . '/classes/Sorting/FormatValue/PostTitle.php',
  'ACP\\Sorting\\FormatValue\\Roles' => $dir . '/classes/Sorting/FormatValue/Roles.php',
  'ACP\\Sorting\\FormatValue\\SerializedSettingFormatter' => $dir . '/classes/Sorting/FormatValue/SerializedSettingFormatter.php',
  'ACP\\Sorting\\FormatValue\\SettingFormatter' => $dir . '/classes/Sorting/FormatValue/SettingFormatter.php',
  'ACP\\Sorting\\FormatValue\\ShortCodeCount' => $dir . '/classes/Sorting/FormatValue/ShortCodeCount.php',
  'ACP\\Sorting\\FormatValue\\StripContent' => $dir . '/classes/Sorting/FormatValue/StripContent.php',
  'ACP\\Sorting\\FormatValue\\Width' => $dir . '/classes/Sorting/FormatValue/Width.php',
  'ACP\\Sorting\\FormatValue\\WordCount' => $dir . '/classes/Sorting/FormatValue/WordCount.php',
  'ACP\\Sorting\\ListScreen' => $dir . '/classes/Sorting/ListScreen.php',
  'ACP\\Sorting\\Model' => $dir . '/classes/Sorting/Model.php',
  'ACP\\Sorting\\ModelFactory' => $dir . '/classes/Sorting/ModelFactory.php',
  'ACP\\Sorting\\Model\\Comment\\Author' => $dir . '/classes/Sorting/Model/Comment/Author.php',
  'ACP\\Sorting\\Model\\Comment\\AuthorFactory' => $dir . '/classes/Sorting/Model/Comment/AuthorFactory.php',
  'ACP\\Sorting\\Model\\Comment\\Author\\FullName' => $dir . '/classes/Sorting/Model/Comment/Author/FullName.php',
  'ACP\\Sorting\\Model\\Comment\\Author\\UserField' => $dir . '/classes/Sorting/Model/Comment/Author/UserField.php',
  'ACP\\Sorting\\Model\\Comment\\Author\\UserMeta' => $dir . '/classes/Sorting/Model/Comment/Author/UserMeta.php',
  'ACP\\Sorting\\Model\\Comment\\FieldFormat' => $dir . '/classes/Sorting/Model/Comment/FieldFormat.php',
  'ACP\\Sorting\\Model\\Comment\\Meta' => $dir . '/classes/Sorting/Model/Comment/Meta.php',
  'ACP\\Sorting\\Model\\Comment\\MetaCount' => $dir . '/classes/Sorting/Model/Comment/MetaCount.php',
  'ACP\\Sorting\\Model\\Comment\\MetaFormat' => $dir . '/classes/Sorting/Model/Comment/MetaFormat.php',
  'ACP\\Sorting\\Model\\Comment\\MetaMapping' => $dir . '/classes/Sorting/Model/Comment/MetaMapping.php',
  'ACP\\Sorting\\Model\\Comment\\Response' => $dir . '/classes/Sorting/Model/Comment/Response.php',
  'ACP\\Sorting\\Model\\CustomField' => $dir . '/classes/Sorting/Model/CustomField.php',
  'ACP\\Sorting\\Model\\CustomFieldFactory' => $dir . '/classes/Sorting/Model/CustomFieldFactory.php',
  'ACP\\Sorting\\Model\\Disabled' => $dir . '/classes/Sorting/Model/Disabled.php',
  'ACP\\Sorting\\Model\\Media\\AttachmentMetaData' => $dir . '/classes/Sorting/Model/Media/AttachmentMetaData.php',
  'ACP\\Sorting\\Model\\Media\\AvailableSizes' => $dir . '/classes/Sorting/Model/Media/AvailableSizes.php',
  'ACP\\Sorting\\Model\\Media\\Dimensions' => $dir . '/classes/Sorting/Model/Media/Dimensions.php',
  'ACP\\Sorting\\Model\\Media\\Exif' => $dir . '/classes/Sorting/Model/Media/Exif.php',
  'ACP\\Sorting\\Model\\Media\\FileSize' => $dir . '/classes/Sorting/Model/Media/FileSize.php',
  'ACP\\Sorting\\Model\\Media\\Height' => $dir . '/classes/Sorting/Model/Media/Height.php',
  'ACP\\Sorting\\Model\\Media\\MimeType' => $dir . '/classes/Sorting/Model/Media/MimeType.php',
  'ACP\\Sorting\\Model\\Media\\Width' => $dir . '/classes/Sorting/Model/Media/Width.php',
  'ACP\\Sorting\\Model\\Meta' => $dir . '/classes/Sorting/Model/Meta.php',
  'ACP\\Sorting\\Model\\MetaCountFactory' => $dir . '/classes/Sorting/Model/MetaCountFactory.php',
  'ACP\\Sorting\\Model\\MetaFactory' => $dir . '/classes/Sorting/Model/MetaFactory.php',
  'ACP\\Sorting\\Model\\MetaFormatFactory' => $dir . '/classes/Sorting/Model/MetaFormatFactory.php',
  'ACP\\Sorting\\Model\\MetaMappingFactory' => $dir . '/classes/Sorting/Model/MetaMappingFactory.php',
  'ACP\\Sorting\\Model\\MetaRelatedPostFactory' => $dir . '/classes/Sorting/Model/MetaRelatedPostFactory.php',
  'ACP\\Sorting\\Model\\MetaRelatedUserFactory' => $dir . '/classes/Sorting/Model/MetaRelatedUserFactory.php',
  'ACP\\Sorting\\Model\\OrderBy' => $dir . '/classes/Sorting/Model/OrderBy.php',
  'ACP\\Sorting\\Model\\Post\\Attachment' => $dir . '/classes/Sorting/Model/Post/Attachment.php',
  'ACP\\Sorting\\Model\\Post\\AuthorFactory' => $dir . '/classes/Sorting/Model/Post/AuthorFactory.php',
  'ACP\\Sorting\\Model\\Post\\AuthorName' => $dir . '/classes/Sorting/Model/Post/AuthorName.php',
  'ACP\\Sorting\\Model\\Post\\Author\\FullName' => $dir . '/classes/Sorting/Model/Post/Author/FullName.php',
  'ACP\\Sorting\\Model\\Post\\Author\\UserField' => $dir . '/classes/Sorting/Model/Post/Author/UserField.php',
  'ACP\\Sorting\\Model\\Post\\Author\\UserMeta' => $dir . '/classes/Sorting/Model/Post/Author/UserMeta.php',
  'ACP\\Sorting\\Model\\Post\\CommentCount' => $dir . '/classes/Sorting/Model/Post/CommentCount.php',
  'ACP\\Sorting\\Model\\Post\\CommentCountFactory' => $dir . '/classes/Sorting/Model/Post/CommentCountFactory.php',
  'ACP\\Sorting\\Model\\Post\\Depth' => $dir . '/classes/Sorting/Model/Post/Depth.php',
  'ACP\\Sorting\\Model\\Post\\EstimateReadingTime' => $dir . '/classes/Sorting/Model/Post/EstimateReadingTime.php',
  'ACP\\Sorting\\Model\\Post\\Excerpt' => $dir . '/classes/Sorting/Model/Post/Excerpt.php',
  'ACP\\Sorting\\Model\\Post\\Featured' => $dir . '/classes/Sorting/Model/Post/Featured.php',
  'ACP\\Sorting\\Model\\Post\\FeaturedImageSize' => $dir . '/classes/Sorting/Model/Post/FeaturedImageSize.php',
  'ACP\\Sorting\\Model\\Post\\FieldFormat' => $dir . '/classes/Sorting/Model/Post/FieldFormat.php',
  'ACP\\Sorting\\Model\\Post\\Fields' => $dir . '/classes/Sorting/Model/Post/Fields.php',
  'ACP\\Sorting\\Model\\Post\\ImageFileSizes' => $dir . '/classes/Sorting/Model/Post/ImageFileSizes.php',
  'ACP\\Sorting\\Model\\Post\\LastModifiedAuthorFactory' => $dir . '/classes/Sorting/Model/Post/LastModifiedAuthorFactory.php',
  'ACP\\Sorting\\Model\\Post\\LatestComment' => $dir . '/classes/Sorting/Model/Post/LatestComment.php',
  'ACP\\Sorting\\Model\\Post\\Menu' => $dir . '/classes/Sorting/Model/Post/Menu.php',
  'ACP\\Sorting\\Model\\Post\\Meta' => $dir . '/classes/Sorting/Model/Post/Meta.php',
  'ACP\\Sorting\\Model\\Post\\MetaCount' => $dir . '/classes/Sorting/Model/Post/MetaCount.php',
  'ACP\\Sorting\\Model\\Post\\MetaFormat' => $dir . '/classes/Sorting/Model/Post/MetaFormat.php',
  'ACP\\Sorting\\Model\\Post\\MetaMapping' => $dir . '/classes/Sorting/Model/Post/MetaMapping.php',
  'ACP\\Sorting\\Model\\Post\\MetaRelatedPostFactory' => $dir . '/classes/Sorting/Model/Post/MetaRelatedPostFactory.php',
  'ACP\\Sorting\\Model\\Post\\MetaRelatedUserFactory' => $dir . '/classes/Sorting/Model/Post/MetaRelatedUserFactory.php',
  'ACP\\Sorting\\Model\\Post\\PageTemplate' => $dir . '/classes/Sorting/Model/Post/PageTemplate.php',
  'ACP\\Sorting\\Model\\Post\\Permalink' => $dir . '/classes/Sorting/Model/Post/Permalink.php',
  'ACP\\Sorting\\Model\\Post\\PostContent' => $dir . '/classes/Sorting/Model/Post/PostContent.php',
  'ACP\\Sorting\\Model\\Post\\PostExcerpt' => $dir . '/classes/Sorting/Model/Post/PostExcerpt.php',
  'ACP\\Sorting\\Model\\Post\\PostField' => $dir . '/classes/Sorting/Model/Post/PostField.php',
  'ACP\\Sorting\\Model\\Post\\PostParent' => $dir . '/classes/Sorting/Model/Post/PostParent.php',
  'ACP\\Sorting\\Model\\Post\\RelatedMeta\\PostField' => $dir . '/classes/Sorting/Model/Post/RelatedMeta/PostField.php',
  'ACP\\Sorting\\Model\\Post\\RelatedMeta\\PostMeta' => $dir . '/classes/Sorting/Model/Post/RelatedMeta/PostMeta.php',
  'ACP\\Sorting\\Model\\Post\\RelatedMeta\\UserField' => $dir . '/classes/Sorting/Model/Post/RelatedMeta/UserField.php',
  'ACP\\Sorting\\Model\\Post\\RelatedMeta\\UserMeta' => $dir . '/classes/Sorting/Model/Post/RelatedMeta/UserMeta.php',
  'ACP\\Sorting\\Model\\Post\\Shortcodes' => $dir . '/classes/Sorting/Model/Post/Shortcodes.php',
  'ACP\\Sorting\\Model\\Post\\Status' => $dir . '/classes/Sorting/Model/Post/Status.php',
  'ACP\\Sorting\\Model\\Post\\Sticky' => $dir . '/classes/Sorting/Model/Post/Sticky.php',
  'ACP\\Sorting\\Model\\Post\\Taxonomy' => $dir . '/classes/Sorting/Model/Post/Taxonomy.php',
  'ACP\\Sorting\\Model\\Post\\WordCount' => $dir . '/classes/Sorting/Model/Post/WordCount.php',
  'ACP\\Sorting\\Model\\RawValue' => $dir . '/classes/Sorting/Model/RawValue.php',
  'ACP\\Sorting\\Model\\Taxonomy\\Menu' => $dir . '/classes/Sorting/Model/Taxonomy/Menu.php',
  'ACP\\Sorting\\Model\\Taxonomy\\Meta' => $dir . '/classes/Sorting/Model/Taxonomy/Meta.php',
  'ACP\\Sorting\\Model\\Taxonomy\\MetaCount' => $dir . '/classes/Sorting/Model/Taxonomy/MetaCount.php',
  'ACP\\Sorting\\Model\\Taxonomy\\MetaFormat' => $dir . '/classes/Sorting/Model/Taxonomy/MetaFormat.php',
  'ACP\\Sorting\\Model\\Taxonomy\\MetaMapping' => $dir . '/classes/Sorting/Model/Taxonomy/MetaMapping.php',
  'ACP\\Sorting\\Model\\User\\CommentCount' => $dir . '/classes/Sorting/Model/User/CommentCount.php',
  'ACP\\Sorting\\Model\\User\\FullName' => $dir . '/classes/Sorting/Model/User/FullName.php',
  'ACP\\Sorting\\Model\\User\\MaxPostDate' => $dir . '/classes/Sorting/Model/User/MaxPostDate.php',
  'ACP\\Sorting\\Model\\User\\Meta' => $dir . '/classes/Sorting/Model/User/Meta.php',
  'ACP\\Sorting\\Model\\User\\MetaCount' => $dir . '/classes/Sorting/Model/User/MetaCount.php',
  'ACP\\Sorting\\Model\\User\\MetaFormat' => $dir . '/classes/Sorting/Model/User/MetaFormat.php',
  'ACP\\Sorting\\Model\\User\\MetaMapping' => $dir . '/classes/Sorting/Model/User/MetaMapping.php',
  'ACP\\Sorting\\Model\\User\\MetaRelatedPostFactory' => $dir . '/classes/Sorting/Model/User/MetaRelatedPostFactory.php',
  'ACP\\Sorting\\Model\\User\\MetaRelatedUserFactory' => $dir . '/classes/Sorting/Model/User/MetaRelatedUserFactory.php',
  'ACP\\Sorting\\Model\\User\\PostCount' => $dir . '/classes/Sorting/Model/User/PostCount.php',
  'ACP\\Sorting\\Model\\User\\RelatedMeta\\PostField' => $dir . '/classes/Sorting/Model/User/RelatedMeta/PostField.php',
  'ACP\\Sorting\\Model\\User\\RelatedMeta\\UserField' => $dir . '/classes/Sorting/Model/User/RelatedMeta/UserField.php',
  'ACP\\Sorting\\Model\\User\\RelatedMeta\\UserMeta' => $dir . '/classes/Sorting/Model/User/RelatedMeta/UserMeta.php',
  'ACP\\Sorting\\Model\\User\\Roles' => $dir . '/classes/Sorting/Model/User/Roles.php',
  'ACP\\Sorting\\Model\\User\\UserField' => $dir . '/classes/Sorting/Model/User/UserField.php',
  'ACP\\Sorting\\Model\\Value' => $dir . '/classes/Sorting/Model/Value.php',
  'ACP\\Sorting\\Model\\WarningAware' => $dir . '/classes/Sorting/Model/WarningAware.php',
  'ACP\\Sorting\\NativeSortableFactory' => $dir . '/classes/Sorting/NativeSortableFactory.php',
  'ACP\\Sorting\\NativeSortable\\NativeSortableRepository' => $dir . '/classes/Sorting/NativeSortable/NativeSortableRepository.php',
  'ACP\\Sorting\\NativeSortable\\Storage' => $dir . '/classes/Sorting/NativeSortable/Storage.php',
  'ACP\\Sorting\\Request\\Sort' => $dir . '/classes/Sorting/Request/Sort.php',
  'ACP\\Sorting\\Settings' => $dir . '/classes/Sorting/Settings.php',
  'ACP\\Sorting\\Settings\\AllResults' => $dir . '/classes/Sorting/Settings/AllResults.php',
  'ACP\\Sorting\\Settings\\ListScreen\\PreferredSegmentSort' => $dir . '/classes/Sorting/Settings/ListScreen/PreferredSegmentSort.php',
  'ACP\\Sorting\\Settings\\ListScreen\\PreferredSort' => $dir . '/classes/Sorting/Settings/ListScreen/PreferredSort.php',
  'ACP\\Sorting\\Sortable' => $dir . '/classes/Sorting/Sortable.php',
  'ACP\\Sorting\\Sorter' => $dir . '/classes/Sorting/Sorter.php',
  'ACP\\Sorting\\Strategy' => $dir . '/classes/Sorting/Strategy.php',
  'ACP\\Sorting\\Strategy\\Comment' => $dir . '/classes/Sorting/Strategy/Comment.php',
  'ACP\\Sorting\\Strategy\\Media' => $dir . '/classes/Sorting/Strategy/Media.php',
  'ACP\\Sorting\\Strategy\\Post' => $dir . '/classes/Sorting/Strategy/Post.php',
  'ACP\\Sorting\\Strategy\\Taxonomy' => $dir . '/classes/Sorting/Strategy/Taxonomy.php',
  'ACP\\Sorting\\Strategy\\User' => $dir . '/classes/Sorting/Strategy/User.php',
  'ACP\\Sorting\\Table\\Filter\\SortableColumns' => $dir . '/classes/Sorting/Table/Filter/SortableColumns.php',
  'ACP\\Sorting\\Table\\ResetButton' => $dir . '/classes/Sorting/Table/ResetButton.php',
  'ACP\\Sorting\\Table\\Screen' => $dir . '/classes/Sorting/Table/Screen.php',
  'ACP\\Sorting\\Type\\CastType' => $dir . '/classes/Sorting/Type/CastType.php',
  'ACP\\Sorting\\Type\\DataType' => $dir . '/classes/Sorting/Type/DataType.php',
  'ACP\\Sorting\\Type\\SortType' => $dir . '/classes/Sorting/Type/SortType.php',
  'ACP\\Sorting\\UserPreference\\SortType' => $dir . '/classes/Sorting/UserPreference/SortType.php',
  'ACP\\Storage\\Directory' => $dir . '/classes/Storage/Directory.php',
  'ACP\\Storage\\ListScreenRepositoryFactory' => $dir . '/classes/Storage/ListScreenRepositoryFactory.php',
  'ACP\\Storage\\ListScreen\\Decoder' => $dir . '/classes/Storage/ListScreen/Decoder.php',
  'ACP\\Storage\\ListScreen\\DecoderFactory' => $dir . '/classes/Storage/ListScreen/DecoderFactory.php',
  'ACP\\Storage\\ListScreen\\Decoder\\Version510' => $dir . '/classes/Storage/ListScreen/Decoder/Version510.php',
  'ACP\\Storage\\ListScreen\\EncodedCollection' => $dir . '/classes/Storage/ListScreen/EncodedCollection.php',
  'ACP\\Storage\\ListScreen\\Encoder' => $dir . '/classes/Storage/ListScreen/Encoder.php',
  'ACP\\Storage\\ListScreen\\LegacyCollectionDecoder' => $dir . '/classes/Storage/ListScreen/LegacyCollectionDecoder.php',
  'ACP\\Storage\\ListScreen\\LegacyCollectionDecoderAggregate' => $dir . '/classes/Storage/ListScreen/LegacyCollectionDecoderAggregate.php',
  'ACP\\Storage\\ListScreen\\LegacyCollectionDecoder\\Version332' => $dir . '/classes/Storage/ListScreen/LegacyCollectionDecoder/Version332.php',
  'ACP\\Storage\\ListScreen\\LegacyCollectionDecoder\\Version384' => $dir . '/classes/Storage/ListScreen/LegacyCollectionDecoder/Version384.php',
  'ACP\\Storage\\ListScreen\\LegacyCollectionDecoder\\Version400' => $dir . '/classes/Storage/ListScreen/LegacyCollectionDecoder/Version400.php',
  'ACP\\Storage\\ListScreen\\Serializer' => $dir . '/classes/Storage/ListScreen/Serializer.php',
  'ACP\\Storage\\ListScreen\\SerializerTypes' => $dir . '/classes/Storage/ListScreen/SerializerTypes.php',
  'ACP\\Storage\\ListScreen\\Serializer\\JsonSerializer' => $dir . '/classes/Storage/ListScreen/Serializer/JsonSerializer.php',
  'ACP\\Storage\\ListScreen\\Serializer\\PhpSerializer' => $dir . '/classes/Storage/ListScreen/Serializer/PhpSerializer.php',
  'ACP\\Storage\\ListScreen\\Serializer\\PhpSerializer\\File' => $dir . '/classes/Storage/ListScreen/Serializer/PhpSerializer/File.php',
  'ACP\\Storage\\ListScreen\\Unserializer' => $dir . '/classes/Storage/ListScreen/Unserializer.php',
  'ACP\\Storage\\ListScreen\\Unserializer\\JsonUnserializer' => $dir . '/classes/Storage/ListScreen/Unserializer/JsonUnserializer.php',
  'ACP\\Strategy' => $dir . '/classes/Strategy.php',
  'ACP\\Table\\HideBulkActions' => $dir . '/classes/Table/HideBulkActions.php',
  'ACP\\Table\\HideFilters' => $dir . '/classes/Table/HideFilters.php',
  'ACP\\Table\\HideSearch' => $dir . '/classes/Table/HideSearch.php',
  'ACP\\Table\\HideSubMenu' => $dir . '/classes/Table/HideSubMenu.php',
  'ACP\\Table\\HorizontalScrolling' => $dir . '/classes/Table/HorizontalScrolling.php',
  'ACP\\Table\\StickyTableRow' => $dir . '/classes/Table/StickyTableRow.php',
  'ACP\\Table\\Switcher' => $dir . '/classes/Table/Switcher.php',
  'ACP\\TermQueryInformation' => $dir . '/classes/TermQueryInformation.php',
  'ACP\\ThirdParty\\ACF\\Addon' => $dir . '/classes/ThirdParty/ACF/Addon.php',
  'ACP\\ThirdParty\\WooCommerce\\Addon' => $dir . '/classes/ThirdParty/WooCommerce/Addon.php',
  'ACP\\ThirdParty\\YoastSeo\\Addon' => $dir . '/classes/ThirdParty/YoastSeo/Addon.php',
  'ACP\\ThirdParty\\YoastSeo\\Column' => $dir . '/classes/ThirdParty/YoastSeo/Column.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\FocusKW' => $dir . '/classes/ThirdParty/YoastSeo/Column/FocusKW.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\IsIndexed' => $dir . '/classes/ThirdParty/YoastSeo/Column/IsIndexed.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\Linked' => $dir . '/classes/ThirdParty/YoastSeo/Column/Linked.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\Links' => $dir . '/classes/ThirdParty/YoastSeo/Column/Links.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\MetaDesc' => $dir . '/classes/ThirdParty/YoastSeo/Column/MetaDesc.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\PrimaryTaxonomy' => $dir . '/classes/ThirdParty/YoastSeo/Column/PrimaryTaxonomy.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\Readability' => $dir . '/classes/ThirdParty/YoastSeo/Column/Readability.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\Score' => $dir . '/classes/ThirdParty/YoastSeo/Column/Score.php',
  'ACP\\ThirdParty\\YoastSeo\\Column\\Title' => $dir . '/classes/ThirdParty/YoastSeo/Column/Title.php',
  'ACP\\ThirdParty\\YoastSeo\\CoreAddon' => $dir . '/classes/ThirdParty/YoastSeo/CoreAddon.php',
  'ACP\\ThirdParty\\YoastSeo\\DeprecatedAddon' => $dir . '/classes/ThirdParty/YoastSeo/DeprecatedAddon.php',
  'ACP\\ThirdParty\\YoastSeo\\Editing\\FocusKW' => $dir . '/classes/ThirdParty/YoastSeo/Editing/FocusKW.php',
  'ACP\\ThirdParty\\YoastSeo\\Editing\\IsIndexed' => $dir . '/classes/ThirdParty/YoastSeo/Editing/IsIndexed.php',
  'ACP\\ThirdParty\\YoastSeo\\Editing\\MetaDesc' => $dir . '/classes/ThirdParty/YoastSeo/Editing/MetaDesc.php',
  'ACP\\ThirdParty\\YoastSeo\\Editing\\PrimaryTaxonomy' => $dir . '/classes/ThirdParty/YoastSeo/Editing/PrimaryTaxonomy.php',
  'ACP\\ThirdParty\\YoastSeo\\Editing\\Title' => $dir . '/classes/ThirdParty/YoastSeo/Editing/Title.php',
  'ACP\\ThirdParty\\YoastSeo\\Export\\FocusKW' => $dir . '/classes/ThirdParty/YoastSeo/Export/FocusKW.php',
  'ACP\\ThirdParty\\YoastSeo\\Export\\MetaDesc' => $dir . '/classes/ThirdParty/YoastSeo/Export/MetaDesc.php',
  'ACP\\ThirdParty\\YoastSeo\\Export\\Title' => $dir . '/classes/ThirdParty/YoastSeo/Export/Title.php',
  'ACP\\ThirdParty\\YoastSeo\\Filtering\\PrimaryTaxonomy' => $dir . '/classes/ThirdParty/YoastSeo/Filtering/PrimaryTaxonomy.php',
  'ACP\\ThirdParty\\YoastSeo\\Filtering\\Title' => $dir . '/classes/ThirdParty/YoastSeo/Filtering/Title.php',
  'ACP\\ThirdParty\\YoastSeo\\Search\\IsIndexed' => $dir . '/classes/ThirdParty/YoastSeo/Search/IsIndexed.php',
  'ACP\\ThirdParty\\YoastSeo\\Settings\\PrimaryTaxonomy' => $dir . '/classes/ThirdParty/YoastSeo/Settings/PrimaryTaxonomy.php',
  'ACP\\ThirdParty\\bbPress\\Addon' => $dir . '/classes/ThirdParty/bbPress/Addon.php',
  'ACP\\ThirdParty\\bbPress\\Column\\TopicForum' => $dir . '/classes/ThirdParty/bbPress/Column/TopicForum.php',
  'ACP\\ThirdParty\\bbPress\\Editing\\TopicForum' => $dir . '/classes/ThirdParty/bbPress/Editing/TopicForum.php',
  'ACP\\Transient\\LicenseCheckTransient' => $dir . '/classes/Transient/LicenseCheckTransient.php',
  'ACP\\Type\\License\\ExpiryDate' => $dir . '/classes/Type/License/ExpiryDate.php',
  'ACP\\Type\\License\\Key' => $dir . '/classes/Type/License/Key.php',
  'ACP\\Type\\License\\RenewalDiscount' => $dir . '/classes/Type/License/RenewalDiscount.php',
  'ACP\\Type\\License\\RenewalMethod' => $dir . '/classes/Type/License/RenewalMethod.php',
  'ACP\\Type\\License\\Status' => $dir . '/classes/Type/License/Status.php',
  'ACP\\Type\\SiteUrl' => $dir . '/classes/Type/SiteUrl.php',
  'ACP\\Updates' => $dir . '/classes/Updates.php',
  'ACP\\Updates\\AddonInstaller' => $dir . '/classes/Updates/AddonInstaller.php',
  'ACP\\Updates\\Updater' => $dir . '/classes/Updates/Updater.php',
  'ACP\\Updates\\ViewPluginDetails' => $dir . '/classes/Updates/ViewPluginDetails.php',
);