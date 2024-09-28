package main

import (
	"fmt"
	"strconv"
)

func main() {
	var n, k int
	var s string
	fmt.Scan(&n, &k)

	for i := 0; i < k; i++ {
		if n%200 == 0 {
			n = n / 200
		} else {
			s = strconv.Itoa(n) + "200"
			tmp, _ := strconv.Atoi(s)
			n = tmp
		}
	}

	fmt.Println(n)
}
