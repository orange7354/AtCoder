package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	a := numbers(26)

	m := make(map[int]string, 26)

	var stringAsAICIINumber int = 97

	for i := 0; i < 26; i++ {
		m[i+1] = string(rune(stringAsAICIINumber + i))
	}

	var res string

	for _, v := range a {
		res += m[v]
	}

	fmt.Println(res)

}

func numbers(size int) []int {
	s := make([]int, size)
	sc := bufio.NewScanner(os.Stdin)
	sc.Split(bufio.ScanWords)

	for i := 0; i < size; i++ {
		sc.Scan()
		a, _ := strconv.Atoi(sc.Text())
		s[i] = a
	}

	return s
}
