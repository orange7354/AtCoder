package main

import (
	"fmt"
	"sort"
)

func main() {
	var a, b string

	fmt.Scan(&a, &b)

	slices := make([]string, 2)
	slices[0] = a
	slices[1] = b

	sort.Slice(slices, func(i, j int) bool {
		return slices[i] < slices[j]
	})

	if slices[0] == a {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}
}
