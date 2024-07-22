package main

import (
	"fmt"
	"sort"
)

func main() {
	var n, t, p int
	fmt.Scan(&n, &t, &p)
	l := make([]int, n)
	for i := range l {
		fmt.Scan(&l[i])
	}

	fmt.Println(exec(l, t, p))
}

func exec(l []int, t, p int) int {
	sort.Sort(sort.Reverse(sort.IntSlice(l)))

	if countReachedTarget(l, t) >= p {
		return 0
	}

	days := 0
	for countReachedTarget(l, t-days) < p {
		days++
	}

	return days
}

func countReachedTarget(l []int, target int) int {
	count := 0
	for _, v := range l {
		if v >= target {
			count++
		} else {
			break
		}
	}
	return count
}
