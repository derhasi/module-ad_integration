<?php

/**
 * @file
 * Contains Drupal\ad_integration\AdIntegrationInterface
 */

namespace Drupal\ad_integration;


interface AdIntegrationInterface {
  /**
   * Gets ad container tag url
   *
   * @return string
   *   The url to the container tag.
   */
  function getAdContainerTag();

  /**
   * Gets ad engine url
   *
   * @return string
   *   The url to the ad engine.
   */
  function getAdEngine();

  /**
   * Gets Ad unit 1
   *
   * @return string
   *   The ad unit 1.
   */
  function getAdUnit1();

  /**
   * Gets Ad unit 2
   *
   * @return string
   *   The ad unit 2.
   */
  function getAdUnit2();

  /**
   * Gets Ad unit 3
   *
   * @return string
   *   The ad unit 3.
   */
  function getAdUnit3();

  /**
   * Gets Ad mode
   *
   * @return string
   *   The ad unit 3.
   */
  function getAdMode();

}

