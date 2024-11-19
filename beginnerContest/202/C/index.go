package main

import "fmt"

func main() {
	var n int
	fmt.Scan(&n)

	a := getNumbers(n)
	b := getNumbers(n)
	c := getNumbers(n)

	m := make(map[int64]int64, n)
	for _, v := range c {
		_, ok := m[v]
		if !ok {
			m[v] = 1
		} else {
			m[v]++
		}
	}
	newM := make(map[int64]int64, n)
	for i, v := range b {
		count, ok := m[int64(i+1)]
		if ok {
			newM[v] += count

		} else {
			newM[v] = 0
		}
	}

	sum := int64(0)

	for _, v := range a {
		count, ok := newM[v]
		if ok {
			sum += count
		}
	}

	fmt.Println(sum)
}

func getNumbers(size int) []int64 {
	a := make([]int64, size)
	for i := 0; i < size; i++ {
		fmt.Scan(&a[i])
	}

	return a
}
