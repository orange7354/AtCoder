package main

import (
	"fmt"
	"sort"
)

func main() {
	var s string
	fmt.Scan(&s)
	a := make([]string, 0, len([]rune(s)))

	for i, _ := range []rune(s) {
		st := string([]rune(s)[i:]) + string([]rune(s)[:i])
		a = append(a, st)
	}

	sort.Slice(a, func(i int, j int) bool {
		return a[i] < a[j]
	})

	fmt.Println(a[0])
	fmt.Println(a[len(a)-1])
}
