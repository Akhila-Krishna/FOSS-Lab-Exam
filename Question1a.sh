 function ft () {
 typeset -i ord=0 dir=0 blk=0 char=0 fifo=0 symlnk=0 other=0

 for fn in *
 do
 	if [[ $(ls -ld "$fn" | cut -b1) == d ]];
 	then
 		((dir=$dir+1));
	 fi
 	if [[ $(ls -ld "$fn" | cut -b1) == b ]];
 	then
 		((blk=$blk+1));
 	fi
	if [[ $(ls -ld "$fn" | cut -b1) == c ]];
 	then
 		((char=$char+1));
 	fi
 	if [[ $(ls -ld "$fn" | cut -b1) == p ]];
 	then
 		((fifo=$fifo+1));
 	fi
 	if [[ $(ls -ld "$fn" | cut -b1) == l ]];
 	then
 		((symlnk=$symlnk+1));
 	fi
	if [[ $(ls -ld "$fn" | cut -b1) == a-z ]];
 	then
 	((other=other+1));
 	 fi
 	if [[ $(ls -ld "$fn" | cut -b1) == * ]];
 	then
 		((ord=ord+1));
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










