package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {
	// 入力の読み込み
	sc := bufio.NewScanner(os.Stdin)
	sc.Buffer(make([]byte, 1024*1024), 1024*1024) // バッファサイズを増やす

	sc.Split(bufio.ScanLines)
	sc.Scan()
	firstLine := strings.Split(sc.Text(), " ")
	N, _ := strconv.Atoi(firstLine[0]) // N人の学生数
	P, _ := strconv.Atoi(firstLine[1]) // 合格最低点

	// 点数の読み込みと判定
	sc.Scan()
	scores := strings.Split(sc.Text(), " ")
	failCount := 0

	// N個の点数を処理
	for i := 0; i < N; i++ {
		score, _ := strconv.Atoi(scores[i])
		if score < P {
			failCount++
		}
	}

	fmt.Println(failCount)
}
