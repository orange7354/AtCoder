package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {
	sc := bufio.NewScanner(os.Stdin)
	sc.Split(bufio.ScanLines)

	m := make(map[int]string, 3)
	for i := 0; i < 3; i++ {
		sc.Scan()
		t := sc.Text()
		m[i+1] = t
	}

	sc.Scan()
	t := sc.Text()
	slice := toNumber(t)

	var res string

	for _, n := range slice {
		res += m[n]
	}

	fmt.Println(res)

}

func toNumber(t string) []int {
	a := make([]int, 0, len(t))

	sl := strings.Split(t, "")

	for _, v := range sl {
		n, _ := strconv.Atoi(v)
		a = append(a, n)
	}

	return a
}
