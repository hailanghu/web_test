<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加图片</title>
    <link type="text/css" rel="stylesheet" href="/wowo/style/css/stylesheet.css"/>
    <script type="text/javascript" src="/wowo/scripts/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="/wowo/scripts/addActivityPicture.js"></script>
</head>
<body>
<!--
<form action="/wowo/Home/Index/help" method="POST" enctype="multipart/form-data">
    <table>
        <tbody>
        <tr>
            <td>活动类型</td>
            <td>
                <div class="searchSelect"><input type="text" name="game_id" id="game_id" class="selectInput"/></div>
            </td>
        </tr>
        <tr>
            <td>上传图片</td>
            <td><input type="file" id="imgFile" name="imgFile"/><span class="remindDiv">图片尺寸：300px X 450px</span></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" id="formSubmitBtn" value="保 存"/>
                <input type="button" onclick='goBack()' value="返 回"/>
            </td>
        </tr>
        </tbody>
    </table>
</form>
-->
<form action="/wowo/Home/Index/addPictureSubmit" method="POST">
    <p>First name: <input type="text" name="fname"/></p>

    <p>Last name: <input type="text" name="lname"/></p>
    <input type="submit" id="sub" value="Submit"/>
</form>
<div id="a"><p>nihao</p></div>
</body>
</html>