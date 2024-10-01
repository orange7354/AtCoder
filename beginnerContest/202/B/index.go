package main

import (
	"fmt"
	"strconv"
	"strings"
)

func main() {
	var m = map[int]int{
		0: 0,
		1: 1,
		8: 8,
		6: 9,
		9: 6,
	}

	var s string
	fmt.Scan(&s)
	slice := strings.Split(s, "")
	len := len(slice)

	var ans string
	for i := len - 1; i >= 0; i-- {
		s, _ := strconv.Atoi(slice[i])
		ans += strconv.Itoa(m[s])
	}

	fmt.Println(ans)
}
