#!/bin/awk -f
{
$NF = toupper ($NF)
print $0
}



















