<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Core\Component\DataGrid;

/**
 * Interface DataGridInterface
 *
 * @package WellCommerce\Core\DataGrid
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface DataGridInterface
{

    const SORT_DIR_ASC   = 'GF_Datagrid.SORT_DIR_ASC';
    const SORT_DIR_DESC  = 'GF_Datagrid.SORT_DIR_DESC';
    const ALIGN_LEFT     = 'GF_Datagrid.ALIGN_RIGHT';
    const ALIGN_CENTER   = 'GF_Datagrid.ALIGN_CENTER';
    const ALIGN_RIGHT    = 'GF_Datagrid.ALIGN_RIGHT';
    const FILTER_NONE    = 'GF_Datagrid.FILTER_NONE';
    const FILTER_INPUT   = 'GF_Datagrid.FILTER_INPUT';
    const FILTER_BETWEEN = 'GF_Datagrid.FILTER_BETWEEN';
    const FILTER_TREE    = 'GF_Datagrid.FILTER_TREE';
    const FILTER_SELECT  = 'GF_Datagrid.FILTER_SELECT';
    const WIDTH_AUTO     = 'GF_Datagrid.WIDTH_AUTO';
    const ACTION_EDIT    = 'GF_Datagrid.ACTION_EDIT';
    const ACTION_DELETE  = 'GF_Datagrid.ACTION_DELETE';
    const REDIRECT       = 'GF_Datagrid.Redirect';

    /**
     * Builds DataGrid
     *
     * @return mixed
     */
    public function buildDataGrid();
}