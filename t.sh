function ft () {
 typeset -i ord=0 dir=0 blk=0 char=0 fifo=0 symlnk=0 other=0

> for fn in *
> do
> case $(ls -ld "$fn" | cut -b1) in
> d)
> ((dir=$dir+1))
> ;;
> b)
> ((blk=$blk+1))
> ;;
> c)
> ((char=$char+1))
> ;;
> p)
> ((fifo=$fifo+1))
> ;;
> l)
> ((symlnk=$symlnk+1))
> ;;
> a-z)
> ((other=other+1))
> ;;
> *)
> ((ord=ord+1))
> ;;
> esac
> done
>
> echo $ord ordinary
> echo $dir directory
> echo $blk block
> echo $char character
> echo $fifo FIFO
> echo $symlnk symbolic link
> echo $other other
> }
 ft
