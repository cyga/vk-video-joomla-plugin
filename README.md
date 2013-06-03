vk-video-joomla-plugin
======================

Joomla plugin for inserting VK video

Usage
=====

Embeds VK videos into articles simply by copying and pasting part of the video code between the vkvideo tags:
{vkvideo}code{/vkvideo}

For example for video at http://vk.com/video425890_164868700:
click on "share video" -&gt; "get video code" (or "<>" angles at top right corner of currently playing video)
You'll find embed code:
<iframe src="http://vk.com/video_ext.php?oid=32194266&id=162925554&hash=7d8c2e0d5e05aeaa&hd=1" width="607" height="360" frameborder="0"></iframe>
Which you turn into text in the article:
{vkvideo}src="http://vk.com/video_ext.php?oid=32194266&id=162925554&hash=7d8c2e0d5e05aeaa&hd=1" width="607" height="360" frameborder="0"{/vkvideo}
