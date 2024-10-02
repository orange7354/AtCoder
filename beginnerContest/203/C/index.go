package main

import (
	"fmt"
)

// TLE するんやで！！！
func main() {
	var n, k int64

	var m map[int64]int64
	m = make(map[int64]int64, n)

	fmt.Scan(&n, &k)

	for i := int64(0); i < n; i++ {
		var a, b int64
		fmt.Scan(&a, &b)
		m[a] += b
	}

	var from int64

	for k >= 0 {
		tmp := test(from, k, m)
		if tmp == 0 {
			break
		}
		k += tmp
		from = k
	}

	fmt.Println(k)
}

func test(form, to int64, m map[int64]int64) int64 {
	var t int64
	t = 0

	for k, v := range m {
		if form <= k && k <= to {
			t += v
		}
	}

	return t
}
