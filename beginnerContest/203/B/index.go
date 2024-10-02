package main

import (
	"fmt"
)

func main() {
	var n, k int
	fmt.Scan(&n, &k)

	var ans int

	for i := 1; i <= n; i++ {
		for j := 1; j <= k; j++ {
			ans += i*100 + j
		}
	}

	fmt.Println(ans)
}
