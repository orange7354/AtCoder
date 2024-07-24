package main

import (
	"fmt"
	"sort"
)

func main() {
	var n, l, r int
	fmt.Scan(&n, &l, &r)

	result := make([]int, n)

	for i := 0; i < n; i++ {
		if l-1 <= i && i <= r-1 {
			continue
		} else {
			result[i] = i + 1
		}
	}

	insert := make([]int, r-l+1)
	for i := 0; i < r-l+1; i++ {
		insert[i] = i + l
	}

	sort.Slice(insert, func(i, j int) bool { return insert[i] > insert[j] })

	for i, v := range insert {
		result[l-1+i] = v
	}

	for _, v := range result {
		fmt.Printf("%d ", v)
	}
}
