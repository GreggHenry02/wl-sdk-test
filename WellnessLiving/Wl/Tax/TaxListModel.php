<?php

namespace WellnessLiving\Wl\Tax;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of taxes for a business.
 */
class TaxListModel extends WlModelAbstract
{
  /**
   * List of taxes.
   *
   * Each element has the following structure:<dl>
   * <dt>string <var>k_tax</var> </dt>
   * <dd>The tax key.</dd>
   * <dt>string <var>text_title</var></dt>
   * <dd>The name of the tax.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * The key of the business to get a list of taxes for.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>