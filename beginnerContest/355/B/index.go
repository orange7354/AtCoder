package main

import (
	"fmt"
	"os"
	"sort"
)

func getNumbers(size int) ([]int, map[int]bool) {
	a := make([]int, size)
	b := map[int]bool{}
	for i := 0; i < size; i++ {
		fmt.Scan(&a[i])
		b[a[i]] = true
	}

	return a, b
}

func main() {
	var n, m int
	fmt.Scan(&n, &m)

	An, mapA := getNumbers(n)

	Bm, _ := getNumbers(m)

	newSlice := append(An, Bm...)
	sort.Ints(newSlice)

	for i := 1; i < len(newSlice); i++ {
		checkA := newSlice[i-1]
		checkB := newSlice[i]

		_, ok := mapA[checkA]
		_, ok2 := mapA[checkB]

		if ok && ok2 {
			fmt.Println("Yes")
			os.Exit(0)
		}

	}

	fmt.Println("No")

}
