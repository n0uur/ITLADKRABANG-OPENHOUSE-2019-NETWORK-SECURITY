import numpy as np
import librosa

signal, sr = librosa.load('./00. uncut.wav')
signal = signal[int(65 * sr):int(65 * sr) + int(3.5 * sr)]

librosa.output.write_wave('./01. pre.wav')
