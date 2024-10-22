package main

import (
	"fmt"
	"strconv"
	"strings"
)

func main() {
	var s string

	fmt.Scan(&s)

	xy := strings.Split(s, ".")

	y, _ := strconv.Atoi(xy[1])

	if 0 <= y && y <= 2 {
		fmt.Println(xy[0] + "-")
	} else if 3 <= y && y <= 6 {
		fmt.Println(xy[0])
	} else {
		fmt.Println(xy[0] + "+")
	}
}
