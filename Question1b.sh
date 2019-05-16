function ft () {
typeset -i ord=0 dir=0 blk=0 char=0 fifo=0 symlnk=0 other=0

for fn in *
do
	if [[ -h $fn ]]
	then
		((symlnk=$symlnk+1))
	elif [[ -f $fn ]]
	then
		((ord=ord+1))
	elif [[ -d $fn ]]
	then
		((dir=$dir+1))
	elif [[ -b $fn ]]
	then
		((blk=$blk+1))
	elif [[ -c $fn ]]
	then
		((char=$char+1))
	elif [[ -p $fn ]]
	then
		((fifo=$fifo+1))
	else
		((other=other+1))
	fi
	done
echo $ord ordinary
echo $dir directory
echo $blk block
echo $char character
echo $fifo FIFO
echo $symlnk symbolic link
echo $other other
}

ft
















