package main

import (
	"fmt"
	"sort"
)

func main() {
	var a, b, c int
	fmt.Scan(&a, &b, &c)

	var s = []int{a, b, c}

	sort.Slice(s, func(i, j int) bool {
		return s[i] < s[j]
	})

	if s[2]-s[1] == s[1]-s[0] {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}

}
