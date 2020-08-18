<?php
namespace Kkokk\Poster\Interfaces;
/**
 * @Author: lang
 * @Email:  732853989@qq.com
 * @Date:   2020-08-14 10:38:17
 * @Last Modified by:   lang
 * @Last Modified time: 2020-08-17 14:05:58
 */

interface MyPoster{
	/**
	 * @Author lang
	 * @Date   2020-08-14T10:40:54+0800
	 * @param  string
	 * @return [type]
	 */
	public function buildIm($w,$h,$rgba=[],$alpha=false);
	public function buildImDst($src,$w=0,$h=0);
	public function buildImage($src,$dst_x=0,$dst_y=0,$src_x=0,$src_y=0,$src_w=0,$src_h=0,$alpha=false,$type='normal');
	public function buildText($content,$dst_x=0,$dst_y=0,$font=16,$rgba=[],$max_w=0,$font_family='');
	public function getPoster();
	public function setPoster();
}