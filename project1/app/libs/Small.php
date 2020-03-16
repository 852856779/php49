<?php
/**
 * [图片缩放]
 * @param  [string] $path   [要缩放的图片的路径]
 * @param  [int] $width  	[要缩放的宽]
 * @param  [int] $height 	[要缩放的高]
 * @param  string $qz     	[前缀]
 * @return [boolean]      	[成放回true]
 */
function Small($path,$width,$height,$qz="small_")
{
	//引入原图像
	//获得一下图片的类型
	$arr = getimagesize($path);
	//获得原图像的宽高
	$width_y = $arr[0];
	$height_y = $arr[1];
	//图片的裁剪 
	switch ($arr[2]) {
		case 1:
			$img = imagecreatefromgif($path);  //引入一个gif图片当画布
		break;
		case 2:
			$img = imagecreatefromjpeg($path);
		break;
		case 3:
			$img = imagecreatefrompng($path);
		break;
		default:
			die("大哥,我支持不了了~");
		break;
	}
	//创建出新的空白画布 用于放置裁剪好的图片
	// imagecopyresized ( 目标图像 , 被缩放的源图像 , 缩放后的图像放到目标图像的坐标点x坐标 , 缩放后的图像放到目标图像的坐标点y坐标 , 从原图像缩放的坐标点的x坐标 , 从原图像缩放的坐标点的y坐标, 缩放后的目标图像的宽 , 缩放后的目标图像的高 , 缩放前的源图像的宽 , 缩放前的源图像的高 )
	// 图片的等比缩放 
	if ($width/$height<$width_y/$height_y) {
		//以宽为基准
		$xwidth = $width;
		$xheight = $height_y*$xwidth/$width_y;
	} else {
		//以高危机准
		$xheight = $height;
		$xwidth = $width_y*$xheight/$height_y;
	}
	$imgnew = imagecreatetruecolor($xwidth,$xheight);

	imagecopyresized($imgnew,$img,0,0,0,0,$xwidth,$xheight,$width_y,$height_y);
	//获得路径的 文件名   
	$arr1 = pathinfo($path);
	$filename = $arr1['dirname'].'/'.$qz.$arr1['basename'];
	

	//$filename = 
	switch ($arr[2]) {
		case 1:
			// header("content-type:image/gif");
			imagegif($imgnew,$filename);
		break;
		case 2:
			// header("content-type:image/jpeg");
			imagejpeg($imgnew,$filename);
		break;
		case 3:
			// header("content-type:image/png");
			imagepng($imgnew,$filename);
		break;
		default:
			die("大哥,我支持不了了~");
		break;
	}

	imagedestroy($img);
	imagedestroy($imgnew);
	return true;
}

