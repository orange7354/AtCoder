package main

import (
	"fmt"
	"sort"
)

type Score struct {
	Point int
	index int
}

func main() {
	var n int
	fmt.Scan(&n)

	tmp := make([]int, n)
	a := make([]Score, n)
	for i := 0; i < n; i++ {
		fmt.Scan(&tmp[i])
		a[i] = Score{
			Point: tmp[i],
			index: i,
		}
	}

	sort.Slice(a, func(i, j int) bool { return a[i].Point > a[j].Point })

	fmt.Println(a[1].index + 1)
}
