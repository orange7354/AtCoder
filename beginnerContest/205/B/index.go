package main

import (
	"fmt"
	"sort"
)

func main() {
	var n int
	fmt.Scan(&n)
	var a []int
	a = make([]int, n)
	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
	}

	sort.Slice(a, func(i, j int) bool {
		return a[i] < a[j]
	})

	var r bool = true
	for i, v := range a {
		if i+1 != v {
			r = false
			break
		}
	}

	if r == true {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}

}
