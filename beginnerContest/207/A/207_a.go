package main

import (
	"fmt"
	"sort"
)

func main() {
	var a, b, c int

	fmt.Scan(&a, &b, &c)
	var s []int = make([]int, 3)
	s[0] = a
	s[1] = b
	s[2] = c

	sort.Slice(s, func(i, j int) bool { return s[i] > s[j] })

	fmt.Println(s[0] + s[1])
}
