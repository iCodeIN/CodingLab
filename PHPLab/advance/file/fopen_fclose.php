<?php

/*

打开模式         描述
r           打开文件为只读。文件指针在文件的开头开始。
w           打开文件为只写。删除文件的内容或创建一个新的文件，如果它不存在。文件指针在文件的开头开始。
a           打开文件为只写。文件中的现有数据会被保留。文件指针在文件结尾开始。创建新的文件，如果文件不存在。
x           创建新文件为只写。返回 FALSE 和错误，如果文件已存在。
r+          打开文件为读/写、文件指针在文件开头开始。
w+          打开文件为读/写。删除文件内容或创建新文件，如果它不存在。文件指针在文件开头开始。
a+          打开文件为读/写。文件中已有的数据会被保留。文件指针在文件结尾开始。创建新文件，如果它不存在。
x+          创建新文件为读/写。返回 FALSE 和错误，如果文件已存在。

*/

$file = fopen("sometext.txt", "r");
if (empty($file)) {
    die("open file failed");
}
else {
    echo "open file succ";
}

fclose($file);

?>