<?php

class PublisherActions extends Actions
{
  public static function executeYoutube()
  {
    return ['page/youtube', [
      '_no_layout' => true
    ]];
  }
}
