package main

import (
	"fmt"
	"strconv"
)

func main() {
	var n, k int
	fmt.Scan(&n, &k)

	var ans int

	for i := 1; i <= n; i++ {
		for j := 1; j <= k; j++ {
			tmp := strconv.Itoa(i) + "0" + strconv.Itoa(j)
			t, _ := strconv.Atoi(tmp)
			ans += t
		}
	}

	fmt.Println(ans)
}
