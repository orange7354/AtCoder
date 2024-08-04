package main

import (
	"fmt"
	"sort"
)

func main() {
	var n int
	fmt.Scan(&n)
	var a = make([]int, n)
	var m = make(map[int]int)
	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
		m[a[i]] = i + 1
	}

	sort.Ints(a)
	fmt.Println(m[a[n-2]])
}
