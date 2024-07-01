package main

import (
	"fmt"
)

func power(n *int, i int) {
	var pow int = 1
	for j := 1; j <= i; j++ {
		pow = pow * 2
	}

	*n = pow + *n
}

func main() {
	var h int
	fmt.Scan(&h)

	var init int = 1
	var ans int
	for i := 1; i < 500; i++ {
		power(&init, i)
		if init > h {
			ans = i
			break
		}
	}

	fmt.Println(ans + 1)
}
