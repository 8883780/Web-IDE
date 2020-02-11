<?php

/**
 * Copyright (C) 2010-2011 Shadez <https://github.com/Shadez>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/

Class DatabaseConfig {
    
    public static $MySQLExtension = 'mysqli'; // 'mysql' or 'mysqli'

    /**
     * 配置游戏世界库.
     * @access public
     **/
    public static $world = array(
        'host'      => 'localhost',
        'user'      => 'root',
        'password'  => '',
        'db_name'   => 'world',
        'charset'   => 'UTF8',
        'db_prefix' => ''
    );
    
    /**
     * 游戏角色库设置.
     * Primary key (1, 2, etc.) is RealmID.
     * @access public
     **/
    public static $characters = array(
        1 => array(
            'host'      => 'localhost',
            'user'      => 'root',
            'password'  => '',
            'db_name'   => 'char',
            'charset'   => 'UTF8',
            'db_prefix' => ''
        )
    );
    
    /**
     * 账号库配置.
     * @access public
     **/
    public static $realm = array(
        'host'      => 'localhost',
        'user'      => 'root',
        'password'  => '',
        'db_name'   => 'auth',
        'charset'   => 'UTF8',
        'db_prefix' => ''
    );
    
    /**
     * 网站数据库设置.
     * @access public
     **/
    public static $wow = array(
        'host'      => 'localhost',
        'user'      => 'root',
        'password'  => '',
        'db_name'   => 'frozen',
        'charset'   => 'UTF8',
        'db_prefix' => 'wow'
    );
}
?>
