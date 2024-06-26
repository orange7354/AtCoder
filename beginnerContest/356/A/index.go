package main

import (
	"fmt"
)

func numbers(size int) []int {
	return make([]int, size)
}

func inputStrings(size int) []string {
	return make([]string, size)
}

func main() {
	var N, L, R int
	fmt.Scan(&N, &L, &R)

	for i := 1; i < L; i++ {
		fmt.Print(i, " ")
	}
	for i := R; i >= L; i-- {
		fmt.Print(i, " ")
	}
	for i := R + 1; i <= N; i++ {
		fmt.Print(i, " ")
	}
	fmt.Println("")

}
