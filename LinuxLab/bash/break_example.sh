#! /bin/bash

# break 跳出外层循环

rm -fr fred*
echo > fred1
echo > fred2
mkdir fred3
echo > fred4

# 查找第一个名字开头是fred的目录
for file in fred*
do
	if [ -d "$file" ]; then
		break
	fi
done

echo "first directory starting fred was $file"

rm -fr fred*
